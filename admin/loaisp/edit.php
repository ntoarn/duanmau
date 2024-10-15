<?php
if (is_array($dm)) {
extract($dm);
}
?>
        
        
        <div class="form">
            <div class="text-2">
                <h1>SỬA LOẠI HÀNG</h1>
            </div>
            <div class="form-content">
                <form action="index.php?act=updatedm" method="post" enctype="multipart/form-data">
                    <div class="id-edit">
                        ID: <br>
                        <input type="text" name="category_id" disabled >
                    </div>
                    <div class="name">
                        Tên loại:<br>
                        <input type="text" name="category_name" value="<?php if(isset($category_name)&&($category_name!="")) echo$category_name ?>" >
                    </div>
                    <div class="btn">
                        <input type="hidden" name="category_id" id="" value="<?php if(isset($category_id)&&($category_id>0)) echo $category_id ?>" >
                        <input type="submit" name="capnhap" value="CẬP NHẬP">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>