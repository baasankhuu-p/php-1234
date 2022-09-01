<?php require ROOT . '/pages/hfpages/header.php';
_selectNoParam($stmt, $count, 'select idusers, name, phone, pass, create_date,email from users', $idusers, $usersname, $usersphone, $userspass, $users_create_date, $usersemail
);
?>
<!-- name, phone, pass, create_date,email -->
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

                <h5 class="card-title">Таны санхүүгийн гүйлгээ - <?=$_SESSION['type']?>
                </h5>
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

                            <?php while (_fetch($stmt)): ?>
                            <tr>
                                <td><a href="/admin/admin-edit?idusers=<?=$idusers?>"><?=$usersname?></a></td>
                                <td><?=$usersphone?></td>
                                <td><?=$userspass?></td>
                                <td><?=!empty($users_create_date) ? $users_create_date : '0'?></td>
                                <td><?=$usersemail?></td>
                                <td class="px-0">
                                    <button onclick="UserDelete(<?=$usersphone?>,<?=$idusers?>);" type="button"
                                        class="btn btn-dribbble   btn-sm p-1 ml-2 mt-2"><i title="Устгах"
                                            class="ti-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php endwhile;?>
                            <!-- Үүнд орлого зардлынхаа давталтыг хийнэ -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function UserDelete(phone, id) {
    var ok = confirm('Та ' +
        id + '-id тай ' + phone + '-дугаартай хэрэглэгчийг устгахад бэлэн байна уу');
    if (ok) {
        location = "/admin/delete-user?phone=" + phone + "&id=" + id;
    }
}
</script>
<?php require ROOT . '/pages/hfpages/footer.php';?>