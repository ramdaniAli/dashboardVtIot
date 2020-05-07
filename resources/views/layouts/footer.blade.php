<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="https://github.com/ramdaniAli/ArduinoIOTPlant" target="_blank">{{ __('Arduino docs') }}</a>
                    </li>
                    <li>
                        <a href="https://github.com/ramdaniAli/serverSideIot" target="_blank">{{ __('Server side docs') }}</a>
                    </li>
                    <li>
                        <a href="https://github.com/ramdaniAli/dashboardVtIot" target="_blank">{{ __('Dashboard docs') }}</a>
                    </li>
                    <li>
                        <a href="https://www.cesi-algerie.com/presentation-exia/" target="_blank">{{ __('Exia cesi') }}</a>
                    </li>
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>{{ __(', made with ') }}<i class="fa fa-heart heart"></i>{{ __(' by ') }}<a class="@if(Auth::guest()) text-white @endif" href="https://www.creative-tim.com" target="_blank">{{ __('Ali') }}</a>
                </span>
            </div>
        </div>
    </div>
</footer>
