<?php
require 'header.php';
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h5 class="card-title">Таны санхүүгийн гүйлгээ</h5>
                <p class="card-title-desc">
                    Мөнгөн дүнг бүхэл тоогоор оруулна. Сар бүр давтагддаг зардлыг СБ хэсэгт тэмдэглэж ялгана.
                </p>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Огноо</th>
                                <th>Гүйлгээний утга</th>
                                <th>СБ</th>
                                <th>Төрөл</th>
                                <th>Харилцагч</th>
                                <th>Мөнгө <i class="fa fa-arrow-up text-success mr-1 font-10"></i></th>
                                <th>Мөнгө <i class="fa fa-arrow-down text-danger mr-1 font-10"></i></th>
                                <th>Хөрөнгө <i class="fa fa-arrow-up text-success mr-1 font-10"></i></th>
                                <th>Хөрөнгө <i class="fa fa-arrow-down text-danger mr-1 font-10"></i></th>
                                <th>Бараа <i class="fa fa-arrow-up text-success mr-1 font-10"></i></th>
                                <th>Бараа <i class="fa fa-arrow-down text-danger mr-1 font-10"></i></th>
                                <th>Авлага <i class="fa fa-arrow-up text-success mr-1 font-10"></i></th>
                                <th>Авлага <i class="fa fa-arrow-down text-danger mr-1 font-10"></i></th>
                                <th>Өр <i class="fa fa-arrow-up text-success mr-1 font-10"></i></th>
                                <th>Өр <i class="fa fa-arrow-down text-danger mr-1 font-10"></i></th>
                                <th>Орлого</th>
                                <th>Зардал</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>07/01</td>
                                <td>Төрсөн өдрөөр хоолонд оров</td>
                                <td>

                                </td>
                                <td>хоол</td>
                                <td>гэрбүл</td>
                                <td></td>
                                <td class="table-danger">69,000</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="table-danger">69,000</td>
                            </tr>


                            <tr>
                                <th scope="row">1</th>
                                <td>07/01</td>
                                <td>Цалин Өсөхөө сарын сүүл</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck02"
                                            data-parsley-multiple="groups" data-parsley-mincheck="2" checked>
                                        <label class="custom-control-label" for="customCheck02"></label>
                                    </div>
                                </td>
                                <td>цалин</td>
                                <td>өсөхөө</td>
                                <td class="table-success">750,000</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="table-success">750,000</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require 'footer.php';