<?php include('../../../../config.php');
$select_branch = $_POST['select_branch'];
?>
<style>
    .dataTables_filter {
        display: none;
    }
</style>

<div class="kt-separator kt-separator--dashed"></div>

<div class="kt-section">
    <div class="kt-section__content responsive">
        <div class="kt-searchbar">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">
                                <i class="la la-search"></i>
                            </span></div>
                <input type="text" id="convert_search" class="form-control"
                       placeholder="Search..." aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="table-responsive">
            <table id="prov-table" class="table" style="margin-top: 3% !important;">
                <thead>
                <tr>
                    <th>Branch</th>
                    <th>Full Name</th>
                    <th>Telephone</th>
                    <th>Residence</th>
                    <th>Denomination</th>
                    <th>How did <br/>you hear</th>
                    <th>Description</th>
                </tr>
                </thead>
            </table>
        </div>

    </div>
</div>


<script>

    oTable = $('#prov-table').DataTable({
        stateSave: true,
        "bLengthChange": false,
        dom: "rtiplf",
        "sDom": '<"top"ip>rt<"bottom"fl><"clear">',
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        'ajax': {
            'url': 'ajax/paginations/convert.php?branch=<?php echo $select_branch ?>'
        },
        'columns': [
            {data: 'branchid'},
            {data: 'fullname'},
            {data: 'telephone'},
            {data: 'residence'},
            {data: 'hearingabout'},
            {data: 'description'}
        ]
    });

    $('#convert_search').keyup(function () {
        oTable.search($(this).val()).draw();
    });

</script>