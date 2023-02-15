  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.home')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-menu-button-wide"></i>
          <span>Type / Category</span>
        </a>
      </li>
      
      

      <li class="nav-heading">Quản lý dữ liệu địa chỉ và môn học</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#grade_subject" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Lớp & Môn học</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="grade_subject" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('subject.index')}}">
              <i class="bi bi-circle"></i><span>Môn học</span>
            </a>
          </li>
          <li>
            <a href="{{route('grade.index')}}">
              <i class="bi bi-circle"></i><span>Lớp học</span>
            </a>
          </li>
          <!-- <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Môn học theo lớp</span>
            </a>
          </li> -->
        </ul>
      </li>

      <!-- Địa chỉ -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#address" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Địa chỉ</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="address" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Tỉnh - Thành phố</span>
            </a>
          </li>
          <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Quận - Huyện</span>
            </a>
          </li>
          <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Xã - Phường - Thị trấn</span>
            </a>
          </li>
        </ul>
      </li>


      <li class="nav-heading">Quản lý vai trò và quyền hạn</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('user.index')}}">
          <i class="bi bi-menu-button-wide"></i>
          <span>Quản lý nhân viên</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#role_permission" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Vai trò & quyền hạn</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="role_permission" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          <li>
            <a href="{{route('role.index')}}">
              <i class="bi bi-circle"></i><span>Vai trò</span>
            </a>
          </li>
          <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Quyền hạn</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>

    </ul>

  </aside>