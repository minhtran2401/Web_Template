<aside id="leftsidebar" class="sidebar">
  <div class="navbar-brand">
      <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
      <a href="index.html"><img src="assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
  </div>
  <div class="menu">
      <ul class="list">
          <li>
              <div class="user-info">
                  <a class="image" href=""><img src="assets/images/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}"></a>
                  <div class="detail">
                      <h6>{{ Auth::user()->name }}</h6>
                  <small>{{ Auth::user()->idgroup==1? "Admin " : "Hacker" }}</small>                        
                  </div>
              </div>
          </li>
          <li class="active open"><a href="admin"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
          <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Ứng dụng xịn xò</span></a>
              <ul class="ml-menu">
                  <li><a href="email">Email</a></li>
                  <li><a href="chatapp">Chat Apps</a></li>
                  <li><a href="calendar">Calendar</a></li>
                            
              </ul>
          </li>
          <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Loại Template</span></a>
              <ul class="ml-menu">
                  <li><a href="">Loại Template</a></li>
                  <li><a href="">Thêm Loại Mới</a></li>
                
              </ul>
          </li>

          <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Template</span></a>
            <ul class="ml-menu">
                <li><a href="">Template</a></li>
                <li><a href="">Thêm Template Mới</a></li>
              
            </ul>
        </li>
          <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>Quản lí File</span></a>
              <ul class="ml-menu">
                  <li><a href="">Tất cả</a></li>
                  <li><a href="">Tài liệu</a></li>
                  <li><a href="">Hình Ảnh</a></li>
                  <li><a href="">Tệp zip</a></li>
              </ul>
          </li>

          <li>
              <div class="progress-container progress-primary m-t-10">
                  <span class="progress-badge">Lượt Truy Cập</span>
                  <div class="progress">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                          <span class="progress-value">67 Lươt</span>
                      </div>
                  </div>
              </div>
              <div class="progress-container progress-info">
                  <span class="progress-badge">Lượt Tải Xuống</span>
                  <div class="progress">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                          <span class="progress-value"> 50 Lượt</span>
                      </div>
                  </div>
              </div>
          </li>
      </ul>
  </div>
</aside>
