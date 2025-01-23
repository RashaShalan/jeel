@extends('admin/layouts/contentNavbarLayout')

@section('title', 'FAQs ')

@section('content')

<div class="row">
  <div class="container welcome col-11">
      <div class="d-flex justify-content-between">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">FAQs /</span>
        </h4>
          <a class="btn-all px-3"  style="color: #0D992C;"  href="{{ url(app()->getLocale() .'/dashboard/faq/create') }}">
              اضافة
              <i class="fa-solid fa-plus"></i>
          </a>
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
          <th>Question</th>
          <th>Answer</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">

      </tbody>
    </table>
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
          ajax: "{{ url(app()->getLocale().'/dashboard/faq/getData') }}",
          bAutoWidth: false,
          columns: [{
                  data: 'id',
                  sWidth: '50px',
                  name: 'id'
              },
              {
                  data: 'question',
                  name: 'Question'
              },
              {
                  data: 'answer',
                  name: 'Answer'
              },


              {
                  data: 'Status',
                  name: 'Status'
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

                   <a href="{{url(app()->getLocale() .'/dashboard/faq/edit')}}?id=${row.id}" class="btn btn-sm" style="background-color: #F7AF15;" onclick=""> <i class="fa fa-edit"></i>Edit </a>
 <a href="#" class="btn btn-sm " style="background-color: #da2323; color:#FFF;" onclick="confirmDelete('${row.id}')"> <i class="fa fa-trash"></i>Delete  </a>

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
  function confirmDelete(id)
  {
    Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {
    $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: '{{url(app()->getLocale() .'/dashboard/faq/delete')}}',
                            type: 'POST',
                            data: {
                                id: id
                            },
                            dataType: 'JSON',
                            success: function(response) {

                            console.log("Data: " + response + "\nStatus: ");
                          Swal.fire({
                              title: "Deleted!",
                              text: "Your file has been deleted.",
                              icon: "success"
                            });
                            document.location.reload();
                          }
  });


  }
});
  }
</script>
@endsection
