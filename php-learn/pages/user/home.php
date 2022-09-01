<?php require ROOT . '/pages/hfpages/header.php';
$year = get('year');
$month = get('month');
if (empty($year)) {
    $year = date('Y');
}
if (empty($month)) {
    $month = date('m');
}

$_SESSION['year'] = $year;
$_SESSION['month'] = $month;
$startDate = $_SESSION['year'] . '-' . $_SESSION['month'] . '-01';
$nextyear = $year;
$nextmonth = $month + 1;
if ($nextmonth == 13) {
    $nextyear++;
    $month = 1;
}
$nextDate = "$nextyear-$nextmonth-01";
_select($stmt, $count, 'select id,ognoo,utga,togtmol,turul,hariltsagch,mungu_usuh,mungu_buurah,hurungu_usuh,hurungu_buurah,baraa_usuh,baraa_buurah,avlaga_usuh,avlaga_buurah,ur_usuh,ur_buurah,orlogo,zardal from transaction where create_user_id =? and ognoo>=? and ognoo<? order by id desc', 'iss', [$_SESSION['idusers'], $startDate, $nextDate],
    $id, $ognoo, $utga, $togtmol, $turul, $hariltsagch, $mungu_usuh, $mungu_buurah, $hurungu_usuh, $hurungu_buurah, $baraa_usuh, $baraa_buurah, $avlaga_usuh, $avlaga_buurah, $ur_usuh, $ur_buurah, $orlogo, $zardal);

_selectRow('select sum(mungu_usuh),sum(mungu_buurah),sum(hurungu_usuh),sum(hurungu_buurah),sum(baraa_usuh),sum(baraa_buurah),sum(avlaga_usuh),sum(avlaga_buurah),sum(ur_usuh),sum(ur_buurah),sum(orlogo),sum(zardal) from transaction where create_user_id = ? and ognoo>=? and ognoo<?', 'iss', [$_SESSION['idusers'], $startDate, $nextDate], $sum_mungu_usuh, $sum_mungu_buurah, $sum_hurungu_usuh, $sum_hurungu_buurah, $sum_baraa_usuh, $sum_baraa_buurah, $sum_avlaga_usuh, $sum_avlaga_buurah, $sum_ur_usuh, $sum_ur_buurah, $sum_orlogo, $sum_zardal);

$active = $sum_mungu_usuh - $sum_mungu_buurah + $sum_hurungu_usuh - $sum_hurungu_buurah + $sum_baraa_usuh - $sum_baraa_buurah + $sum_avlaga_usuh - $sum_avlaga_buurah;

$passive = $sum_ur_usuh - $sum_ur_buurah + $sum_orlogo - $sum_zardal;
$outMoney = $active - $passive;
function showclass($money, $class)
{
    if ($money !== 0) {
        return $class = 'badge-soft-danger';
    } else {
        return $class = 'badge-soft-success';
    }
}
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

                <h5 class="card-title">Таны санхүүгийн гүйлгээ - <span
                        class="badge badge-boxed badge-soft-primary p-2">Нийт
                        : (<?=$count?> ш) </span>
                </h5>
                <div class="mb-2">

                    <div class="btn-group mt-1 mr-1">
                        <button class="btn btn-dark btn-sm" type="button">
                            <span id="year"><?=$year?></span>
                        </button>
                        <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu" style="">
                            <?php foreach (range(2016, 2022) as $value): ?>
                            <a class="dropdown-item" href="javascript:void();" onclick="chooseYear(<?=$value?>);">
                                <?=$value?>
                            </a>
                            <?php endforeach;?>
                        </div>
                    </div>

                    <div class="btn-group mt-1 mr-1">
                        <button class="btn btn-dark btn-sm" type="button">
                            <span id="month"><?=$month?></span>
                        </button>
                        <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu" style="">
                            <?php foreach (range(1, 12) as $value): ?>
                            <a class="dropdown-item" href="javascript:void();" onclick="chooseMonth(<?=$value?>);">

                                <?=$value?>
                            </a>
                            <?php endforeach;?>
                        </div>
                    </div>

                    <div class="btn-group mt-1 mr-1">
                        <button class="btn btn-dark btn-sm" type="button" onclick="filterTransaction();">
                            Шүүх
                        </button>
                    </div>

                    <?php if ($count > 0): ?><span
                        class="badge badge-boxed badge-soft-success p-1"><?=formatMoney($active)?></span>
                    -
                    <span class="badge badge-boxed badge-soft-danger p-1"><?=formatMoney($passive)?></span>
                    =

                    <span class="badge badge-boxed <?=showclass($outMoney, $class)?> p-1"><?php if ($outMoney == 0) {echo '0';}
formatMoney($outMoney);
?></span>
                    <?php endif;?>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>

                            <tr>
                                <th class="px-0 pr-1">Огноо</th>
                                <th class="px-0 pr-1">Гүйлгээний утга</th>
                                <th class="px-0 pr-1">СБ</th>
                                <th class="px-0 pr-1">Төрөл</th>
                                <th class="px-0 pr-1">Харилцагч</th>
                                <th class="px-0 pr-1 bg-soft-primary">Мөнгө <i
                                        class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-primary">Мөнгө <i
                                        class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-primary">Хөрөнгө <i
                                        class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-primary">Хөрөнгө <i
                                        class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-primary">Бараа <i
                                        class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-primary">Бараа <i
                                        class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-primary">Авлага <i
                                        class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-primary">Авлага <i
                                        class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-pink">Өр <i
                                        class="fa fa-arrow-down text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-pink">Өр <i
                                        class="fa fa-arrow-up text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-pink">Орлого</th>
                                <th class="px-0 pr-1 bg-soft-pink">Зардал</th>
                                <th class="px-0 pr-1 bg-soft-pink"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-0 pr-1"></td>
                                <td class="px-0 pr-1"></td>
                                <td class="px-0 pr-1">
                                </td>
                                <td></td>
                                <td><strong>Нийлбэр: </strong></td>
                                <td>
                                    <strong
                                        class="badge badge-boxed badge-success p-2"><?=formatMoney($sum_mungu_usuh - $sum_mungu_buurah)?></strong>
                                </td>
                                <td></td>
                                <td>
                                    <strong
                                        class="badge badge-boxed badge-success p-2"><?=formatMoney($sum_hurungu_usuh - $sum_hurungu_buurah)?></strong>
                                </td>
                                <td></td>
                                <td>
                                    <strong
                                        class="badge badge-boxed badge-success p-2"><?=formatMoney($sum_baraa_usuh - $sum_baraa_buurah)?></strong>
                                </td>
                                <td></td>
                                <td>
                                    <strong
                                        class="badge badge-boxed badge-success p-2"><?=formatMoney($sum_avlaga_usuh - $sum_avlaga_buurah)?></strong>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <strong
                                        class="badge badge-boxed badge-danger p-2"><?=formatMoney($sum_ur_usuh - $sum_ur_buurah)?></strong>
                                </td>
                                <td>
                                    <strong
                                        class="badge badge-boxed badge-danger p-2"><?=formatMoney($sum_orlogo - $sum_zardal)?></strong>
                                </td>
                                <td></td>
                                <td class="px-0"></td>
                            </tr>
                            <tr>
                                <td class="px-0 pr-1"></td>
                                <td class="px-0 pr-1"></td>
                                <td class="px-0 pr-1">
                                </td>
                                <td></td>
                                <td>Нийлбэр: </td>
                                <td style="color:#0acf97;">
                                    <?=formatMoney($sum_mungu_usuh)?></td>
                                <td class="text-danger">
                                    <?=formatMoney($sum_mungu_buurah)?></td>
                                <td style="color:#0acf97;">
                                    <?=formatMoney($sum_hurungu_usuh)?></td>
                                <td class="text-danger">
                                    <?=formatMoney($sum_hurungu_buurah)?></td>
                                <td style="color:#0acf97;">
                                    <?=formatMoney($sum_baraa_usuh)?></td>
                                <td class="text-danger">
                                    <?=formatMoney($sum_baraa_buurah)?></td>
                                <td style="color:#0acf97;">
                                    <?=formatMoney($sum_avlaga_usuh)?></td>
                                <td class="text-danger">
                                    <?=formatMoney($sum_avlaga_buurah)?></td>
                                <td style="color:#0acf97;">
                                    <?=formatMoney($sum_ur_buurah)?></td>
                                <td class="text-danger">
                                    <?=formatMoney($sum_ur_usuh)?></td>
                                <td style="color:#0acf97;">
                                    <?=formatMoney($sum_orlogo)?></td>
                                <td class="text-danger">
                                    <?=formatMoney($sum_zardal)?></td>
                                <td class="px-0"></td>
                            </tr>
                            <form action="/user/record/new" method="post">
                                <tr>

                                    <td class="px-0 pr-1"><input style="width:75px;" data-date-format="yy/mm/dd"
                                            value="<?=date('y/m/d')?>" type="text" id="datepicker"
                                            class="form-control form-control-sm" placeholder="огноо" name="ognoo">
                                    </td>
                                    <td class="px-0 pr-1"><input value="" class="form-control form-control-sm"
                                            style="width: 250px;" type="text" name="utga" placeholder="Гүйлгээний утга">
                                    </td>
                                    <td class="px-0 pr-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck02"
                                                name="togtmol" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                            <label class="custom-control-label" for="customCheck02"></label>
                                        </div>
                                    </td>
                                    <td class="px-0 pr-1"><input value="" name="turul"
                                            class="form-control form-control-sm" type="text" placeholder="Төрөл"></td>
                                    <td class="px-0 pr-1"><input value="" name="hariltsagch"
                                            class="form-control form-control-sm" type="text" placeholder="Харилцагч">
                                    </td>
                                    <td class="px-0 pr-1"><input value="" name="mungu_usuh"
                                            class="form-control form-control-sm" type="text" placeholder="өсөх">
                                    </td>
                                    <td class="px-0 pr-1"><input name="mungu_buurah"
                                            class="form-control form-control-sm" type="text" placeholder="буурах"></td>
                                    <td class="px-0 pr-1"><input value="" name="hurungu_usuh"
                                            class="form-control form-control-sm" type="text" placeholder="өсөх">
                                    </td>
                                    <td class="px-0 pr-1"><input value="" name="hurungu_buurah"
                                            class="form-control form-control-sm" type="text" placeholder="буурах"></td>
                                    <td class="px-0 pr-1"><input value="" name="baraa_usuh"
                                            class="form-control form-control-sm" type="text" placeholder="өсөх">
                                    </td>
                                    <td class="px-0 pr-1"><input value="" name="baraa_buurah"
                                            class="form-control form-control-sm" type="text" placeholder="буурах"></td>
                                    <td class="px-0 pr-1"><input value="" name="avlaga_usuh"
                                            class="form-control form-control-sm" type="text" placeholder="өсөх">
                                    </td>
                                    <td class="px-0 pr-1"><input value="" name="avlaga_buurah"
                                            class="form-control form-control-sm" type="text" placeholder="буурах"></td>

                                    <td class="px-0 pr-1"><input value="" name="ur_buurah"
                                            class="form-control form-control-sm" type="text" placeholder="буурах"></td>
                                    <td class="px-0 pr-1"><input value="" name="ur_usuh"
                                            class="form-control form-control-sm" type="text" placeholder="өсөх">
                                    </td>
                                    <td class="px-0 pr-1"><input value="" name="orlogo"
                                            class="form-control form-control-sm" type="text" placeholder="орлого"></td>
                                    <td class="px-0 pr-1"><input value="" name="zardal"
                                            class="form-control form-control-sm" type="text" placeholder="зардал"></td>
                                    <td class="p-0">
                                        <button type="submit" class="btn btn-instagram btn-sm p-1 mt-2 ml-2">
                                            <i title="Хадгалах" class="ti-save"></i>
                                        </button>
                                    </td>
                                </tr>
                            </form>
                            <?php
while (_fetch($stmt)): ?>
                            <!-- Үүнд орлого зардлынхаа давталтыг хийнэ -->
                            <tr>
                                <td class="px-0 pr-1"><?=substr(str_replace('-', '/', $ognoo), 5)?></td>
                                <td class="px-0 pr-1"><a href="/user/record/edit?id=<?=$id?>"><?=$utga?></a>
                                </td>
                                <td class="px-0 pr-1">
                                    <?php
if (!empty($togtmol)): ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck02"
                                            data-parsley-multiple="groups" data-parsley-mincheck="2" checked>
                                        <label class="custom-control-label" for="customCheck02"></label>
                                    </div>
                                    <?php endif;?>
                                </td>
                                <td><?=$turul?></td>
                                <td><?=$hariltsagch?></td>
                                <td <?php if (!empty($mungu_usuh)): ?> class="table-success" <?php endif;?>>
                                    <?=formatMoney($mungu_usuh)?></td>
                                <td <?php if (!empty($mungu_buurah)): ?> class="table-danger" <?php endif;?>>
                                    <?=formatMoney($mungu_buurah)?></td>
                                <td <?php if (!empty($hurungu_usuh)): ?> class="table-success" <?php endif;?>>
                                    <?=formatMoney($hurungu_usuh)?></td>
                                <td <?php if (!empty($hurungu_buurah)): ?> class="table-danger" <?php endif;?>>
                                    <?=formatMoney($hurungu_buurah)?></td>
                                <td <?php if (!empty($baraa_usuh)): ?> class="table-success" <?php endif;?>>
                                    <?=formatMoney($baraa_usuh)?></td>
                                <td <?php if (!empty($baraa_buurah)): ?> class="table-danger" <?php endif;?>>
                                    <?=formatMoney($baraa_buurah)?></td>
                                <td <?php if (!empty($avlaga_usuh)): ?> class="table-success" <?php endif;?>>
                                    <?=formatMoney($avlaga_usuh)?></td>
                                <td <?php if (!empty($avlaga_buurah)): ?> class="table-danger" <?php endif;?>>
                                    <?=formatMoney($avlaga_buurah)?></td>

                                <td <?php if (!empty($ur_buurah)): ?> class="table-success" <?php endif;?>>
                                    <?=formatMoney($ur_buurah)?></td>
                                <td <?php if (!empty($ur_usuh)): ?> class="table-danger" <?php endif;?>>
                                    <?=formatMoney($ur_usuh)?></td>
                                <td <?php if (!empty($orlogo)): ?> class="table-success" <?php endif;?>>
                                    <?=formatMoney($orlogo)?></td>
                                <td <?php if (!empty($zardal)): ?> class="table-danger" <?php endif;?>>
                                    <?=formatMoney($zardal)?></td>
                                <td class="px-0">
                                    <button onclick="ConfirmDelete(<?=$id?>,'<?=$utga?>','<?=$ognoo?>')" type="button"
                                        class="btn btn-dribbble   btn-sm p-1 ml-2 mt-2"><i title="Устгах"
                                            class="ti-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <?php endwhile;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function ConfirmDelete(recordId, recordUtga, recordOgnoo) {
    var ok = confirm('Та ' + recordOgnoo + '-өдрийн " ' + recordUtga +
        '"-утгатай гүйлгээг устгахад бэлэн байна уу ');
    if (ok) {
        location = "/user/record/delete?id=" + recordId + "&utga=" + recordUtga + "&ognoo=" + recordOgnoo;
    }
}
let year = <?=$year?>;
let month = <?=$month?>;

function chooseYear(value) {
    year = value;
    document.getElementById('year').innerHTML = value;
}

function chooseMonth(value) {
    month = value;
    document.getElementById('month').innerHTML = value;
}

function filterTransaction() {
    location = "/user/home?year=" + year + "&month=" + month;
}
</script>
<?php require ROOT . '/pages/hfpages/footer.php';?>