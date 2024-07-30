<div class="acovw-wrap-inner">
    <div class="hourlywrap">
        <div class="acv-title-wrapper-box">
            <h4>Today</h4>
            <div class="select-cur">
                <select class="form-select today-currency-drop">
                <option value="USD" selected>USD</option>
                </select>
        
                
                <svg xmlns="http://www.w3.org/2000/svg" width="22.042" height="22.012" viewBox="0 0 22.042 22.012">
                    <g id="Group_25812" data-name="Group 25812" transform="translate(-0.962 -0.988)">
                        <path id="Path_76764" data-name="Path 76764" d="M15,7a8,8,0,1,0,8,8A8.024,8.024,0,0,0,15,7Zm-.2,7.5h.5a1.781,1.781,0,0,1,1.9,1.6A1.846,1.846,0,0,1,15.6,18v.5a.5.5,0,0,1-1,0V18h-1a.5.5,0,0,1,0-1h1.8a.789.789,0,0,0,.8-.8.736.736,0,0,0-.8-.8h-.5A1.781,1.781,0,0,1,13,13.8a1.846,1.846,0,0,1,1.6-1.9v-.5a.5.5,0,0,1,1,0V12h1a.472.472,0,0,1,.5.5.56.56,0,0,1-.6.5H14.7a.789.789,0,0,0-.8.8c0,.5.4.7.9.7Z" fill="#397ab7"/>
                        <path id="Path_76765" data-name="Path 76765" d="M13.7,5.5a6.515,6.515,0,1,0-12.4,4,6.311,6.311,0,0,0,4.2,4.2h.2a.664.664,0,0,0,.5-.4,8.624,8.624,0,0,1,1.1-2.8A2.579,2.579,0,0,1,5,8,.5.5,0,0,1,5,7,2.476,2.476,0,0,1,7.5,4.5h1A.472.472,0,0,1,9,5a.472.472,0,0,1-.5.5h-1A1.538,1.538,0,0,0,6,7H7.5a.5.5,0,0,1,0,1H6A1.538,1.538,0,0,0,7.5,9.5h.4a9.032,9.032,0,0,1,5.4-3.3.569.569,0,0,0,.4-.7Zm9-1.4a.663.663,0,0,0-.7.2l-.3.7a5.46,5.46,0,0,0-5.2-4,.472.472,0,0,0-.5.5.472.472,0,0,0,.5.5,4.686,4.686,0,0,1,4.3,3.6l-1.1-.5c-.3-.1-.5,0-.7.3a.481.481,0,0,0,.2.6l2,1a.663.663,0,0,0,.7-.2l1-2a.43.43,0,0,0-.2-.7ZM7.5,22a4.686,4.686,0,0,1-4.3-3.6l1.1.6a.539.539,0,1,0,.4-1l-2-1a.663.663,0,0,0-.7.2l-1,2c-.1.3,0,.5.3.7a.481.481,0,0,0,.6-.2l.4-.8A5.577,5.577,0,0,0,7.5,23a.5.5,0,0,0,0-1Z" fill="#397ab7"/>
                    </g>
                </svg>
            </div>
        </div>

        <div class="chartbox">
            <h6>Processing Volume (hourly)</h6>

            <div class="chartmiddle-wrapper">
                <div id="today-chart"></div>

		        <div id="no-data-today" class="no-data-today hide"> 
                    <span>No Data Available</span>
                </div>
            </div>

            <ul class="chartlower-wrapper">
                <li>
                    Volume
                    <span id="todayVolume">0 USD</span>
                </li>
                <li>
                    Average transaction size
                    <span id="todayAvgTraS">0 USD</span>
                </li>
                <li>
                    Refunds
                    <span id="todayRefunds">0 USD</span>
                </li>
                <li>
                    Number of transactions
                    <span id="todayNoTra">0</span>
                </li>
                <li>
                    Approval Rate
                    <span id="todayAproval">0%</span>
                </li>
            </ul>

        </div>
    </div>

    <div class="perdaywrap">
        <div class="acv-title-wrapper-box">
            <h4>Custom Date Range</h4>
            <div class="date-cur-range">
                <div class="date-range">
                    <select class="form-select" id="dateRangeSelector">
                        <option value="7" selected>Last 7 Days</option>
                        <option value="15">Last 15 Days</option>
                        <option value="30">Last 30 Days</option>
                    </select>
                    
                    
                </div>
                <div class="select-date-range">
                    <input type="text" name="daterange" value="<?php echo !empty($filters['daterange']) ? $filters['daterange'] : ''; ?>" />
                    <svg class="showcal" id="Group_17881" data-name="Group 17881" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18.225" height="19.382" viewBox="0 0 18.225 19.382">
                    <defs>
                        <clipPath id="clip-path">
                        <rect id="Rectangle_1308" data-name="Rectangle 1308" width="18.225" height="19.382" fill="#397ab7"/>
                        </clipPath>
                    </defs>
                    <g id="Group_17880" data-name="Group 17880" clip-path="url(#clip-path)">
                        <path id="Path_17742" data-name="Path 17742" d="M16.056,192.891H14.32v2.025a1.446,1.446,0,0,1-2.893,0v-2.025H6.8v2.025a1.446,1.446,0,0,1-2.893,0v-2.025H2.17A2.172,2.172,0,0,0,0,195.061v13.6a2.172,2.172,0,0,0,2.17,2.17H16.056a2.172,2.172,0,0,0,2.17-2.17v-13.6a2.172,2.172,0,0,0-2.17-2.17m1.3,15.766a1.3,1.3,0,0,1-1.3,1.3H2.17a1.3,1.3,0,0,1-1.3-1.3V198.425h16.49Z" transform="translate(0 -191.445)" fill="#397ab7"/>
                        <rect id="Rectangle_1302" data-name="Rectangle 1302" width="2.604" height="2.604" transform="translate(3.471 9.257)" fill="#397ab7"/>
                        <rect id="Rectangle_1303" data-name="Rectangle 1303" width="2.604" height="2.604" transform="translate(7.811 9.257)" fill="#397ab7"/>
                        <rect id="Rectangle_1304" data-name="Rectangle 1304" width="2.604" height="2.604" transform="translate(12.15 9.257)" fill="#397ab7"/>
                        <rect id="Rectangle_1305" data-name="Rectangle 1305" width="2.604" height="2.604" transform="translate(3.471 13.597)" fill="#397ab7"/>
                        <rect id="Rectangle_1306" data-name="Rectangle 1306" width="2.604" height="2.604" transform="translate(7.811 13.597)" fill="#397ab7"/>
                        <rect id="Rectangle_1307" data-name="Rectangle 1307" width="2.604" height="2.604" transform="translate(12.15 13.597)" fill="#397ab7"/>
                        <path id="Path_17743" data-name="Path 17743" d="M598.866,4.337a.868.868,0,0,0,.868-.868V.866a.868.868,0,0,0-1.736,0v2.6a.868.868,0,0,0,.868.868" transform="translate(-593.514 0.002)" fill="#397ab7"/>
                        <path id="Path_17744" data-name="Path 17744" d="M1601.957,4.337a.868.868,0,0,0,.868-.868V.866a.868.868,0,0,0-1.736,0v2.6a.868.868,0,0,0,.868.868" transform="translate(-1589.084 0.002)" fill="#397ab7"/>
                    </g>
                </svg>

                </div>
                <div class="select-cur">
                    <select class="form-select custom-currency-drop">
                    <option value="USD" selected>USD</option>
                    </select>
            
                

                    <svg xmlns="http://www.w3.org/2000/svg" width="22.042" height="22.012" viewBox="0 0 22.042 22.012">
                        <g id="Group_25812" data-name="Group 25812" transform="translate(-0.962 -0.988)">
                            <path id="Path_76764" data-name="Path 76764" d="M15,7a8,8,0,1,0,8,8A8.024,8.024,0,0,0,15,7Zm-.2,7.5h.5a1.781,1.781,0,0,1,1.9,1.6A1.846,1.846,0,0,1,15.6,18v.5a.5.5,0,0,1-1,0V18h-1a.5.5,0,0,1,0-1h1.8a.789.789,0,0,0,.8-.8.736.736,0,0,0-.8-.8h-.5A1.781,1.781,0,0,1,13,13.8a1.846,1.846,0,0,1,1.6-1.9v-.5a.5.5,0,0,1,1,0V12h1a.472.472,0,0,1,.5.5.56.56,0,0,1-.6.5H14.7a.789.789,0,0,0-.8.8c0,.5.4.7.9.7Z" fill="#397ab7"/>
                            <path id="Path_76765" data-name="Path 76765" d="M13.7,5.5a6.515,6.515,0,1,0-12.4,4,6.311,6.311,0,0,0,4.2,4.2h.2a.664.664,0,0,0,.5-.4,8.624,8.624,0,0,1,1.1-2.8A2.579,2.579,0,0,1,5,8,.5.5,0,0,1,5,7,2.476,2.476,0,0,1,7.5,4.5h1A.472.472,0,0,1,9,5a.472.472,0,0,1-.5.5h-1A1.538,1.538,0,0,0,6,7H7.5a.5.5,0,0,1,0,1H6A1.538,1.538,0,0,0,7.5,9.5h.4a9.032,9.032,0,0,1,5.4-3.3.569.569,0,0,0,.4-.7Zm9-1.4a.663.663,0,0,0-.7.2l-.3.7a5.46,5.46,0,0,0-5.2-4,.472.472,0,0,0-.5.5.472.472,0,0,0,.5.5,4.686,4.686,0,0,1,4.3,3.6l-1.1-.5c-.3-.1-.5,0-.7.3a.481.481,0,0,0,.2.6l2,1a.663.663,0,0,0,.7-.2l1-2a.43.43,0,0,0-.2-.7ZM7.5,22a4.686,4.686,0,0,1-4.3-3.6l1.1.6a.539.539,0,1,0,.4-1l-2-1a.663.663,0,0,0-.7.2l-1,2c-.1.3,0,.5.3.7a.481.481,0,0,0,.6-.2l.4-.8A5.577,5.577,0,0,0,7.5,23a.5.5,0,0,0,0-1Z" fill="#397ab7"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>

        <div class="chartbox">
            <h6>Processing Volume (Per Day)</h6>

            <div class="chartmiddle-wrapper">
            <div id="custom-chart"></div>
                <div id="no-data-custom" class="no-data-custom hide"> 
                    <span>No Data Available</span>
                </div>

            </div>

            <ul class="chartlower-wrapper">
                <li>
                    Volume 
                    <span id="volume">0 USD</span>
                </li>

                <li>
                    Average transaction size 
                    <span id="avg_trans_size">0 USD</span>
                </li>

                <li>
                    Refunds 
                    <span id="refunds">0 USD</span>
                </li>

                <li>
                    Number of transactions
                    <span id="no_of_trans">0</span>
                </li>

                <li>
                    Approval Rate
                    <span id="approve_percent">0%</span>
                </li>
                <!-- <li>Chargebacks <span id="chargebacks_percent">0%</span></li> -->
            </ul>
        </div>
    </div>
</div>
