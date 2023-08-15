
    <!-- Section Footer -->
    <section class="section-footer">
        <div class="texture-handler-top"></div>
        <div class="row">
            <div class="col-left">
                <p>Copyright &copy; BUSDEV <script language="JavaScript">document.write(new Date().getFullYear());</script></p>
                <p>Jl. Cendrawasih SP. III Kuala Kencana - Timika - Papua <br>
                    Phone : +62 811 4900 700 <br>
                    Email : info@mimikakab.go.id </p>
                <a href="https://www.facebook.com/dinas.mimika" target="_blank"><span
                        class="ion-social-facebook icon-social"></span></a>
                <a href="https://www.instagram.com/pemkabmimika/?hl=en" target="_blank"><span
                        class="ion-social-instagram icon-social"></span></a>
                <a href="https://twitter.com/mimikapemkab" target="_blank"><span
                        class="ion-social-twitter icon-social"></span></a>
            </div>
            <div class="col-right">
                <b>TRAVEL GUIDE</b>
                <ul>
                    <li><a href="#">Tourism Guide</a></li>
                    <li><a href="#">Travel Agent</a></li>
                    <li><a href="#">Accomodations</a></li>
                    <li><a href="#">On Budget</a></li>
                </ul>
            </div>
            <div class="col-right">
                <b>WHAT'S HAPPEN</b>
                <ul>
                    <li><a href="{{ route('fe.news') }}">News</a></li>
                    <li><a href="{{ route('fe.event') }}">Event</a></li>
                    <li><a href="{{ route('fe.culture') }}">Culture</a></li>
                    <li><a href="{{ route('fe.destination') }}">Destination</a></li>
                </ul>
            </div>
            <div class="col-right">
                <b>STATISTIK PENGUNJUNG</b>
                <table>
                    <tbody>
                        <tr>
                            <td>Hari ini</td>
                            <td align="center" width="20">:</td>
                            {{-- <td>10</td> --}}
                            <td>{{ \Setting::getCountDate() }}</td>
                        </tr>
                        <tr>
                            <td>Bulan ini</td>
                            <td align="center" width="20">:</td>
                            <td>100</td>
                            {{-- <td>{{ \Setting::getCountMonth() }}</td> --}}
                        </tr>
                        <tr>
                            <td>Tahun ini</td>
                            <td align="center" width="20">:</td>
                            {{-- <td>1000</td> --}}
                            <td>{{ \Setting::getCountYear() }}</td>
                        </tr>
                        <tr>
                            <td>Keseluruhan</td>
                            <td align="center" width="20">:</td>
                            {{-- <td>10000</td> --}}
                            <td>{{ \Setting::getCountAll() }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="footer-bottom">
            <p><a href="https://github.com/" rel="noreferer" target="_blank">{{ config('app.name2', 'Laravel') }}</a> - Created With <span class="ion-heart red"></span> to create a Lovable Website</p>
        </div>
    </section>
