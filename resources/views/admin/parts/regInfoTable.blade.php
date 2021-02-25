<style>
  tr.nowrap td {
       white-space:nowrap;
   }
</style>
<!-- Content Header (Page header) -->
    <section class="content-header no-print">
        <h1>
          Email Numbers All
          <small>Home</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Email Numbers All</li>
        </ol>
      </section>
  
      <!-- Main content -->
      <section class="content" style="min-height: 600px;">
  
        <div class="row">
          <div class="col-sm-12">
  
            <div class="box box-widget">
              <div class="box-header with-border no-print">
              <h3 class="box-title">All Email Numbers</h3>
              <div class="hidden-xs">
                {{ $users->render() }}
              </div>
              <div class="box-tools pull-right">
                {{-- <button class="btn w3-dark-grey btn-sm" onclick="exportTableToExcel('user_registration_data')"><i class="fa fa-file-excel-o"> </i> export</button> --}}
                <button class="btn w3-dark-grey btn-sm" onclick="exportTableToCSV('user_registration_data.csv')"><i class="fa fa-file-excel-o"> </i> export</button>
                <a class="btn btn-primary btn-sm" href="" onclick="return window.print();"> <i class="fa fa-print"></i> Print</a>
              </div>
            </div>
  
              <div class="box-body- table-responsive">
  
              <table id="user_registration_data" class="table table-hover table-striped table-bordered table-sm border-dark">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Birth Date</th>
                    <th>Education</th>
                    <th>Profession</th>
                    <th>Monthly Income</th>
                    <th>Father's name</th>
                    <th>Father's education</th>
                    <th>Father's occupation</th>
                    <th>Family status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = (($users->currentPage() - 1) * $users->perPage() + 1); ?>
                  @foreach($users as $user)
                  <tr class="nowrap">
                    <td>{{ $i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ strlen(bdMobile($user->mobile)) == 13 ?bdMobile($user->mobile) : 'number incorrect'}}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ now()->parse($user->dob)->format('d-M-Y') }}</td>
                    <td>{{ $user->education_level }}</td>
                    <td>{{ $user->profession }}</td>
                    <td>{{ $user->familyInfo->yearly_income ?? '' }}</td>
                    <td>{{ $user->familyInfo->father_name ?? ''  }}</td>
                    <td>{{ $user->familyInfo->father_education ?? ''  }}</td>
                    <td>{{ $user->familyInfo->father_occupation ?? ''  }}</td>
                    <td>{{ $user->familyInfo->family_type ?? ''  }}</td>
                  </tr>
  
                  <?php $i++; ?>
                  @endforeach
                </tbody>
              </table>
  
              <div class="no-print">
                {{ $users->render() }}
              </div>               
              </div>
            </div>
  
          </div>
        </div>
        
  
      </section>
      <!-- /.content -->

    @push('js')
        <script>
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'user_registration_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}

function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}
function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
        row.push("\""+cols[j].innerText+"\"");
        
        csv.push(row.join(","));        
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}
        </script>
    @endpush