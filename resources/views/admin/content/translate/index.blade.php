@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Translate ')

@section('content')

<div class="row">
  <div class="container welcome col-11">
      <div class="d-flex justify-content-between">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Translate /</span>
        </h4>
         {{--  <a class="btn-all px-3"  style="color: #0D992C;"  href="{{ url(app()->getLocale() .'/dashboard/slider/create') }}">
              اضافة
              <i class="fa-solid fa-plus"></i>
          </a> --}}
      </div>
  </div>
</div>
<br>
<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Table Basic</h5>
  <div class="table-responsive text-nowrap">
    <table class=" display table table-responsive-sm table-bordered table-hover dataTable" id="data-table">
      <thead>
        <tr>
          <td>index</td>
          <th>String </th>
          <th>Title ar</th>
          <th>Title en</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">

      </tbody>
    </table>
  </div>
</div>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form name="updateForm" id="updateForm" method="POST">
        <input type="hidden"name="id" id="id">
        @csrf
        <div class="card-body demo-vertical-spacing demo-only-element">
          <div class="form-floating form-floating-outline mb-4">
            <input type="text" class="form-control" id="title_ar" name="title_ar" placeholder="Title in Arabic" />
            <label for="title_ar">Title in Arabic</label>
          </div>
          <div class="form-floating form-floating-outline mb-4">
            <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Title in English" />
            <label for="title_en">Title in English</label>
          </div>

          <button class="btn btn-primary d-grid w-100" onclick="ModifyItem(event)">Save</button>

        </div>
       </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!--/ Basic Bootstrap Table -->


@endsection
@section('page-script')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

<script>
  $(document).ready(function() {
      $.fn.dataTable.ext.classes.sPageButton = 'btn-pagination btn-sm';

      $('#data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ url(app()->getLocale().'/dashboard/translate/getData') }}",
          bAutoWidth: false,
          columns: [{
                  data: 'id',
                  sWidth: '50px',
                  name: 'id'
              },
              {
                  data: 'string',
                  name: 'String'
              },
              {
                  data: 'title_ar',
                  render: function(data, type, row) {
                    if(data.length>100)
                    return data = data.substr(0, 50)+" .... ";
                    else return data


                  }
              },
              {
                  data: 'title_en',
                  render: function(data, type, row) {
                    if(data.length>100)
                      return data = data.substr(0, 20)+" .... ";
                      return data;

                  }
              },

              {
                  data: 'action',
                  name: 'action',
                  sWidth: '200px',
                  orderable: false,
                  searchable: false
              }
          ],

          columnDefs: [{
              targets: -1,
              render: function(data, type, row) {
                  return `

                   <a href="javascript:void(0)" class="btn btn-sm" style="background-color: #F7AF15;" onclick="modify('${row.id}','${row.string}','${row.title_ar}','${row.title_en}')" data-toggle="modal" data-target="#myModal"> <i class="fa fa-edit"></i>Edit </a>



                  `;
              }
          }],
          oLanguage: {
              sSearch: "",
              sSearchPlaceholder: "بحث",
              sInfo: 'اظهار صفحة _PAGE_ من _PAGES_',
              sInfoEmpty: 'لا توجد بيانات متاحه',
              sInfoFiltered: '(تم تصفية من _MAX_ اجمالى البيانات)',
              sLengthMenu: 'اظهار _MENU_ عنصر لكل صفحة',
              sZeroRecords: 'نأسف لا توجد نتيجة',
              oPaginate: {
                  "sFirst": '<i class="fa fa-fast-backward" aria-hidden="true"></i>', // This is the link to the first page
                  "sPrevious": '<i class="fa fa-chevron-left" aria-hidden="true"></i>', // This is the link to the previous page
                  "sNext": '<i class="fa fa-chevron-right" aria-hidden="true"></i>', // This is the link to the next page
                  "sLast": '<i class="fa fa-step-forward" aria-hidden="true"></i>' // This is the link to the last page
              }
          },
          pagingType: "full_numbers",
          "fnDrawCallback": function(oSettings) {
              console.log('Page '+this.api().page.info().pages)
          var page=this.api().page.info().pages;
          console.log($('#users-table tr').length);
          if (page ==1) {
           //   $('.dataTables_paginate').hide();//css('visiblity','hidden');
              $('.dataTables_paginate').css('visibility', 'hidden');  // to hide

          }
          }
      });
  });
  function modify(id,string,title_ar,title_en)
  {
    $('.modal-title').html('تعديل '+string)
    $('#id').val(id)
    $('#title_ar').val(title_ar)
    $('#title_en').val(title_en)
    //$('#myModal').modal('show');


  }
  function ModifyItem(event)
  {
    event.preventDefault();
    var data=$('#updateForm').serialize();
    console.log(data);
    $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: '{{url(app()->getLocale() .'/dashboard/translate/update')}}',
                            type: 'POST',
                            data: data,
                            dataType: 'JSON',
                            success: function(response) {

                            console.log("Data: " + response + "\nStatus: ");
                            Swal.fire({
                              title: "Updated!",
                              text: "Your item has been updated.",
                              icon: "success"
                            });
                            document.location.reload();

                          }
  });
  }
</script>
@endsection
