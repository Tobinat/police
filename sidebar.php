<div id="sidebar">

				<!-- Widget Area -->
				<div id="widgets">
				
					<!-- Main menu -->
					<nav id="mainmenu">
						<ul>
							<?php if(isLoggedIn()) { 
							$off = hasPerm("officer");
							$dev = hasPerm("all");
							$cmd = hasPerm("pdcmd");
							$dtu = hasPerm("dtu");?><li><a href="index.php" class="active">Home</a></li><?php } else {?>
							<li><a href="login.php" class="active">Login</a></li><?php }?>
							<?php
							require_once("php_includes/base.inc.php");
							if($off) {
							?>
                            <li><a href="addBolo.php">Warnungen Dashboard</a></li>
                            <li><a href="freq.php">Frequenzen & Bedrohungen</a></li>
                            <li><a href="#">Aufzeichnungen</a>
                            	<ul>
                            		<li><a href="crime.php">Anzeigen</a></li>
                                    <li><a href="traffic.php">Straftaten</a></li>
									<?php if(hasPerm("doj")) { ?>
                                    <li><a href="doc.php">DOJ Panel</a></li>
                                    <li><a href="expungement.php">Expungements</a></li>
									<li><a href="all.php">Alle Verhaftungen</a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <?php
                            }
							if($off) {
							?>
                            <li><a href="#">Nützliche Informationen</a>
                            	<ul>
                            		<li><a href="roster.php">Polizei Dienstplan</a></li>
                                	<li><a href="arrests.php">Datenbank Verhaftungen</a></li>
                                	<li><a href="citations.php">Recent Citations</a></li>
                                	<li><a href="info.php">Nützliche Links</a></li>
                                </ul>
                            </li>
							<li><a href="#">Haftbefehle</a>
                            	<ul>
                            		<li><a href="wname.php">Suchen/Hinzufügen</a></li>
                                	<li><a href="warrants.php">Alle Haftbefehle</a></li>
                                </ul>
                            </li>
							<?php
                            }
							if($off && $cmd) {
							?>
							<li><a href="#">Befehlstools</a>
                            	<ul>
                            		<li><a href="dashboard.php">Dashboard</a></li>
                                	<li><a href="verify.php">User Requests</a></li>
                                	<li><a href="control.php">Officer Management</a></li>
                                </ul>
                            </li>
                            <?php
                            }
							if($dev) {
							?>
							<li><a href="#">Admin Tools</a>
                            	<ul>
                            		<li><a href="admin.php">Database Settings</a></li>
                            		<li><a href="all.php">Alle Verhaftungen</a></li>
                            		<li><a href="passhasher.php">Password Hasher</a></li>
                                </ul>
                            </li>
							<?php
							}
							?>
							<?php if(isLoggedIn()) { ?>
                            <li><a href="settings.php">Benutzereinstellungen</a></li>
                            <li><a href="changes.php">Changelog</a></li>
                            <li><a href="logout.php">Ausloggen</a></li><?php } ?>
						</ul>
					</nav>

				</div>