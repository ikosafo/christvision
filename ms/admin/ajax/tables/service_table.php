<?php include('../../../../config.php');
$getservice = $mysqli->query("select * from `service` ORDER BY period DESC");
//$select_branch = $_POST['select_branch'];
?>
<style>
    .dataTables_filter {
        display: none;
    }
</style>


<div class="kt-section">
    <div class="kt-section__content responsive">
        <div class="kt-searchbar">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">
                                <i class="la la-search"></i>
                            </span></div>
                <input type="text" id="data_search" class="form-control"
                       placeholder="Search..." aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="table-responsive">
            <table id="data-table" class="table" style="margin-top: 3% !important;">
                <thead>
                <tr>
                    <th>Branch</th>
                    <th>Service Name</th>
                    <th>Start Period</th>
                    <th>End Period</th>
                    <th>Period</th>
                    <th>Entry Period</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($resservice = $getservice->fetch_assoc()) { ?>
                    <tr>
                        <td>
                            <?php
                            $branchid = $resservice['branch'];
                            $getbranch = $mysqli->query("select * from branch where id = '$branchid'");
                            $resbranch = $getbranch->fetch_assoc();
                            echo $resbranch['name'];
                            ?>
                        </td>
                        <td><?php echo $resservice['service_name']; ?></td>
                        <td><?php echo $resservice['start_period']; ?></td>
                        <td><?php echo $resservice['end_period']; ?></td>
                        <td><?php echo $resservice['service_period']; ?></td>
                        <td><?php echo $resservice['period']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>


<script>
    oTable = $('#data-table').DataTable({
        "bLengthChange": false,"order": []
    });

    $('#data_search').keyup(function () {
        oTable.search($(this).val()).draw();
    });
</script>