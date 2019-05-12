<ul class='sidebar-menu' data-widget='tree'>
        <li class='active'>
          <a href='<?= $url?>index.php'>
            <i class='fa fa-dashboard'></i>
            <span>Trang chủ</span>
          </a>
        </li>

        <li>
          <a href='<?=$url?>user/danhsachUser.php'>
            <i class='fa fa-users'></i>
            <span>Quản lí user</span>
          </a>
        </li>
        <li class='treeview'>
          <a>
            <i class='fa fa-cubes'></i>
            <span>Quản lí sản phẩm</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a>
          <ul class='treeview-menu'>
            <li>
              <a href='<?=$url?>products/products.php'><i class='fa fa-list-alt'></i> Danh sách sản phẩm</a>
            </li>
            <li>
              <a href='<?=$url?>products/add_products.php'><i class='fa fa-plus-square'></i> Thêm sản phẩm</a>
            </li>
          </ul>
        </li>
        <li class='treeview'>
          <a>
            <i class='glyphicon glyphicon-align-justify'></i>
            <span>Quản lí danh mục</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a>
          <ul class='treeview-menu'>
            <li>
              <a href='<?=$url?>categories/categories.php'><i class='fa fa-list-alt'></i>Danh sách danh mục</a>
            </li>
            <li>
              <a href='<?=$url?>categories/add_categories.php'><i class='fa fa-plus-square'></i>Thêm danh mục</a>
            </li>
          </ul>
        </li>
        <li>
          <a href='<?=$url?>invoices/invoices.php'>
            <i class='fa  fa-paper-plane-o'></i> <span>Quản lí hóa đơn</span>
          </a>
        </li>
        <li>
          <a href='<?= $url?>contact/contact.php'>
            <i class='fa  fa-print'></i> <span>Quản lí liên hệ</span>
          </a>
        </li>
        <li>
          <a href='<?= $url?>comment/comments.php'>
            <i class='fa  fa-paper-plane-o'></i> <span>Quản lí bình luận</span>
          </a>
        </li>
        <li class='treeview'>
          <a>
            <i class='fa  fa-gears'></i>
            <span>Quản lí website</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a>
          <ul class='treeview-menu'>
            <li>
              <a href='<?= $url?>websettings/update_slider.php'><i class='fa fa-sliders'></i> Slider</a>
            </li>
            <li>
              <a href='<?= $url?>websettings/websetting.php'><i class='fa fa-gear'></i> Cài đặt chung</a>
            </li>
          </ul>
        </li>
      </ul>