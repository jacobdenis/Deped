<nav class="sidebar">
			<div class="sidebar-content ">
				<a class="sidebar-brand" href="index.html">
                    <i class="align-middle" data-feather="box"></i>
                    <span class="align-middle"><?=$title?></span>
                </a>

				<ul class="sidebar-nav">
					<?php
						if(	$this->RoleType=='Admin'){
							echo '
							<li class="sidebar-header">
								Menu
							</li>
							<li class="sidebar-item"><a class="sidebar-link" href="'.base_url('index.php/Admin').'">Dashboard</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="'.base_url('index.php/Admin/Users').'">Users</a></li> 
							<li class="sidebar-item"><a class="sidebar-link" href="'.base_url('index.php/Admin/SchoolEmployees').'">School Employee</a></li> 
							<li class="sidebar-item"><a class="sidebar-link" href="'.base_url('index.php/Admin/DivisionEmployees').'">Division Employee</a></li>
							';
						}elseif($this->RoleType=='SchoolEmployee'){
							echo '
							<li class="sidebar-header">
								Menu
							</li>
							<li class="sidebar-item"><a class="sidebar-link" href="'.base_url('index.php/School').'">Dashboard</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="'.base_url('index.php/School/SchoolEmployees').'">School Employee</a></li> 
							';
						}
					?>
				</ul>
			</div>
		</nav>
