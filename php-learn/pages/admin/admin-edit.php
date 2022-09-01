<?php
require ROOT . '/pages/hfpages/header.php';
$idusers = get('idusers', 10);
_selectRow('select name, phone, pass, create_date,email from users where idusers=?', 'i', [$idusers], $u_name, $u_phone, $u_pass, $u_date, $u_email
);
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
                                <th class="px-0 pr-1">Хэрэглэгчийн нэр</th>
                                <th class="px-0 pr-1">Утас</th>
                                <th class="px-0 pr-1">Нууц үг</th>
                                <th class="px-0 pr-1">Үүссэн хугацаа</th>
                                <th class="px-0 pr-1">имейл</th>
                                <th class="px-0 pr-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="/admin/admin-save?id=<?=$idusers?>" method="post">
                                <tr>

                                    <td class="px-0 pr-1"><input value="<?=$u_name?>" type="text"
                                            class="form-control form-control-sm" name="u_name">
                                    </td>
                                    <td class="px-0 pr-1"><input value="<?=$u_phone?>"
                                            class="form-control form-control-sm" style="width: 250px;" type="text"
                                            name="u_phone">
                                    </td>
                                    <td class="px-0 pr-1"><input value="<?=$u_pass?>" name="u_pass"
                                            class="form-control form-control-sm" type="text"></td>
                                    <td class="px-0 pr-1"><input value="<?=$u_date?>" name="u_date"
                                            class="form-control form-control-sm" type="text">
                                    </td>
                                    <td class="px-0 pr-1"><input value="<?=$u_email?>" name="u_email"
                                            class="form-control form-control-sm" type="text"></td>
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