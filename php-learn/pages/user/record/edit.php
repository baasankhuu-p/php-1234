<?php require ROOT . '/pages/hfpages/header.php';
$id = get('id', 10);
_selectRow('select id,ognoo,utga,togtmol,turul,hariltsagch,mungu_usuh,mungu_buurah,hurungu_usuh,hurungu_buurah,baraa_usuh,baraa_buurah,avlaga_usuh,avlaga_buurah,ur_usuh,ur_buurah,orlogo,zardal from transaction where id = ? and create_user_id =?', 'ii', [$id, $_SESSION['idusers']], $id, $ognoo, $utga, $togtmol, $turul, $hariltsagch, $mungu_usuh, $mungu_buurah, $hurungu_usuh, $hurungu_buurah, $baraa_usuh, $baraa_buurah, $avlaga_usuh, $avlaga_buurah, $ur_usuh, $ur_buurah, $orlogo, $zardal);
?>
<style>
td,
th {
    font-size: 12px;
}

td>i:hover {
    color: blueviolet;
}
</style>

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
                                <th class="px-0 pr-1">Огноо</th>
                                <th class="px-0 pr-1">Гүйлгээний утга</th>
                                <th class="px-0 pr-1">СБ</th>
                                <th class="px-0 pr-1">Төрөл</th>
                                <th class="px-0 pr-1">Харилцагч</th>
                                <th class="px-0 pr-1 bg-soft-success">Мөнгө <i
                                        class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-success">Мөнгө <i
                                        class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-success">Хөрөнгө <i
                                        class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-success">Хөрөнгө <i
                                        class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-success">Бараа <i
                                        class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-success">Бараа <i
                                        class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-success">Авлага <i
                                        class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-success">Авлага <i
                                        class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-warning">Өр <i
                                        class="fa fa-arrow-down text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-warning">Өр <i
                                        class="fa fa-arrow-up text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-warning">Орлого</th>
                                <th class="px-0 pr-1 bg-soft-warning">Зардал</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="/user/record/edit-save?id=<?=$id?>" method="post">
                                <tr>

                                    <td class="px-0 pr-1"><input value="<?=$ognoo?>" type="text"
                                            class="form-control form-control-sm" placeholder="огноо" name="ognoo"
                                            id="datepicker" data-date-format="yyyy-mm-dd">
                                    </td>
                                    <td class="px-0 pr-1"><input value="<?=$utga?>" class="form-control form-control-sm"
                                            style="width: 250px;" type="text" name="utga" placeholder="Гүйлгээний утга">
                                    </td>
                                    <td class="px-0 pr-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" <?php if (!empty($togtmol)): ?> checked <?php endif?>
                                                class="custom-control-input" id="customCheck02" name="togtmol"
                                                data-parsley-multiple="groups" data-parsley-mincheck="2">
                                            <label class="custom-control-label" for="customCheck02"></label>
                                        </div>
                                    </td>
                                    <td class="px-0 pr-1"><input value="<?=$turul?>" name="turul"
                                            class="form-control form-control-sm" type="text" placeholder="Төрөл"></td>
                                    <td class="px-0 pr-1"><input value="<?=$hariltsagch?>" name="hariltsagch"
                                            class="form-control form-control-sm" type="text" placeholder="Харилцагч">
                                    </td>
                                    <td class="px-0 pr-1"><input value="<?=$mungu_usuh?>" name="mungu_usuh"
                                            class="form-control form-control-sm" type="text" placeholder="өсөх"></td>
                                    <td class="px-0 pr-1"><input value="<?=$mungu_buurah?>" name="mungu_buurah"
                                            class="form-control form-control-sm" type="text" placeholder="буурах"></td>
                                    <td class="px-0 pr-1"><input value="<?=$hurungu_usuh?>" name="hurungu_usuh"
                                            class="form-control form-control-sm" type="text" placeholder="өсөх"></td>
                                    <td class="px-0 pr-1"><input value="<?=$hurungu_buurah?>" name="hurungu_buurah"
                                            class="form-control form-control-sm" type="text" placeholder="буурах"></td>
                                    <td class="px-0 pr-1"><input value="<?=$baraa_usuh?>" name="baraa_usuh"
                                            class="form-control form-control-sm" type="text" placeholder="өсөх"></td>
                                    <td class="px-0 pr-1"><input value="<?=$baraa_buurah?>" name="baraa_buurah"
                                            class="form-control form-control-sm" type="text" placeholder="буурах"></td>
                                    <td class="px-0 pr-1"><input value="<?=$avlaga_usuh?>" name="avlaga_usuh"
                                            class="form-control form-control-sm" type="text" placeholder="өсөх"></td>
                                    <td class="px-0 pr-1"><input value="<?=$avlaga_buurah?>" name="avlaga_buurah"
                                            class="form-control form-control-sm" type="text" placeholder="буурах"></td>

                                    <td class="px-0 pr-1"><input value="<?=$ur_buurah?>" name="ur_buurah"
                                            class="form-control form-control-sm" type="text" placeholder="буурах"></td>
                                    <td class="px-0 pr-1"><input value="<?=$ur_usuh?>" name="ur_usuh"
                                            class="form-control form-control-sm" type="text" placeholder="өсөх"></td>
                                    <td class="px-0 pr-1"><input value="<?=$orlogo?>" name="orlogo"
                                            class="form-control form-control-sm" type="text" placeholder="орлого"></td>
                                    <td class="px-0 pr-1"><input value="<?=$zardal?>" name="zardal"
                                            class="form-control form-control-sm" type="text" placeholder="зардал"></td>
                                    <td class="pt-3">
                                        <button type="submit" class="btn btn-instagram btn-sm p-1 ml-1">
                                            <i title="Хадгалах" class="ti-save mr-1 font-10"></i>
                                        </button>
                                    </td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require ROOT . '/pages/hfpages/footer.php';?>