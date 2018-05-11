<?php
session_start();
if(strcmp($_SESSION["type"],'Admin')!=0){
    header( 'Location: ./index.php');
}
?>
<?php require 'Header.php'; ?>
<style type="text/css">
.table-wrapper {
    display: block;
    max-height: 300px;
    overflow-y: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}
</style>
<!--Main layout-->
<main>
    <div id="" class="container-fluid text-center">
        <!--Card-->
        <div class="card card-cascade wider reverse my-4 pb-5">
            <!--Card content-->
            <div class="card-body text-center wow fadeIn" data-wow-delay="0.2s">
                <!--Title-->
                <h4 class="card-title">
                    <strong>Welcome <?php echo $_SESSION["User"];?> </strong>
                </h4>

            </div>
        </div>
    </div>

    <div class="card card-cascade narrower">

        <div class="px-4">

            <div >
                <!--Table-->
                <table class="table table-hover mb-0 table-responsive">

                    <!--Table head-->
                    <thead class="blue-grey lighten-4 table-wrapper">
                        <tr>
                            <th>
                                <input type="checkbox" id="checkbox">
                                <label for="checkbox" class="mr-2 label-table"></label>
                            </th>
                            <th class="th-lg"><a>First Name <i class="fa fa-sort ml-1"></i></a></th>
                            <th class="th-lg"><a href="">Last Name<i class="fa fa-sort ml-1"></i></a></th>
                            <th class="th-lg"><a href="">Username<i class="fa fa-sort ml-1"></i></a></th>
                            <th class="th-lg"><a href="">Username<i class="fa fa-sort ml-1"></i></a></th>
                            <th class="th-lg"><a href="">Username<i class="fa fa-sort ml-1"></i></a></th>
                            <th class="th-lg"><a href="">Username<i class="fa fa-sort ml-1"></i></a></th>
                        </tr>
                    </thead>
                    <!--Table head-->

                    <!--Table body-->
                    <tbody class="table-wrapper">
                        <tr>
                            <th scope="row">
                                <input type="checkbox" id="checkbox1">
                                <label for="checkbox1" class="label-table"></label>
                            </th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input type="checkbox" id="checkbox1">
                                <label for="checkbox1" class="label-table"></label>
                            </th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input type="checkbox" id="checkbox1">
                                <label for="checkbox1" class="label-table"></label>
                            </th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input type="checkbox" id="checkbox2">
                                <label for="checkbox2" class="label-table"></label>
                            </th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input type="checkbox" id="checkbox3">
                                <label for="checkbox3" class="label-table"></label>
                            </th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input type="checkbox" id="checkbox4">
                                <label for="checkbox4" class="label-table"></label>
                            </th>
                            <td>Paul</td>
                            <td>Topolski</td>
                            <td>@P_Topolski</td>
                            <td>Paul</td>
                            <td>Topolski</td>
                            <td>@P_Topolski</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input type="checkbox" id="checkbox5">
                                <label for="checkbox5" class="label-table"></label>
                            </th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                    <!--Table body-->
                </table>
                <!--Table-->
            </div>

            <hr class="my-0">

            <!--Bottom Table UI-->
            <div class="d-flex justify-content-between">

                <!--Name-->
                <select class="mdb-select colorful-select dropdown-primary mt-2 hidden-md-down">
                    <option value="" disabled >Rows number</option>
                    <option value="1" selected>10 rows</option>
                    <option value="2">25 rows</option>
                    <option value="3">50 rows</option>
                    <option value="4">100 rows</option>
                </select>

                <!--Pagination -->
                <nav class="my-4">
                    <ul class="pagination pagination-circle pg-blue mb-0">

                        <!--First-->
                        <li class="page-item disabled"><a class="page-link">First</a></li>

                        <!--Arrow left-->
                        <li class="page-item disabled">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <!--Numbers-->
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link">5</a></li>

                        <!--Arrow right-->
                        <li class="page-item">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>

                        <!--First-->
                        <li class="page-item"><a class="page-link">Last</a></li>

                    </ul>
                </nav>
                <!--/Pagination -->

            </div>
            <!--Bottom Table UI-->

        </div>
    </div>
</main>
<?php require 'Footer.php'; ?>