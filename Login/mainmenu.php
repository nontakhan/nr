<div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li <?= $home ?? '' ;?>>
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>HOME</span>
                        </a>
                    </li>
                    <li <?= $oss ?? '' ;?>>
                        <a href="oss.php">
                            <i class="material-icons">fingerprint</i>
                            <span>ONE STOP SERVICE (OSS)</span>
                        </a>
                    </li>
                    <li <?= $hrm ?? '' ;?>>
                        <a href="hrm.php">
                            <i class="material-icons">group</i>
                            <span>หัวหน้าฝ่าย/งานบุคคล (HRM)</span>
                        </a>
                    </li>
                    <li <?= $emoney ?? '' ;?>>
                        <a href="emoney.php">
                            <i class="material-icons">attach_money</i>
                            <span>ระบบเงินเดือน (E-Money)</span>
                        </a>
                    </li >
                   
                            
                    <li <?= $eservice ?? '' ;?>>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">vpn_lock</i>
                            <span>web-site อื่นๆ</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="https://www.numrunggroup.com/">เว็บไซต์นำรุ่ง</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>