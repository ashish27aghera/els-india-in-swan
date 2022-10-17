<script src="js/jquery/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins/plugins.js"></script>
<script src="js/active.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="js/track.js"></script>
<script>
    var currentURL = window.location.href;
    var domain = new URL(currentURL);
    domain = domain.hostname;
    var site_key = "";
    var captcha_div = document.getElementById('captcha_div');
    var domain_input = document.getElementById('domain_input');
    console.log(domain);
    if (domain == 'els-india.com') {
        site_key = '6LdoPgciAAAAALkX3D8N54nfJZbtX65Q-V3xjl0N';
        captcha_div.setAttribute('data-sitekey', site_key)
        captcha_div.getAttribute('captcha_div').value;
        domain_input.setAttribute('value', domain);
    } else if (domain == 'localhost') {
        site_key = '6Lc3PwciAAAAAArr50ZaDCKvATpgnKEFNORgpdiq';
        captcha_div.setAttribute('data-sitekey', site_key)
        captcha_div.getAttribute('captcha_div').value;
        domain_input.setAttribute('value', domain);
    }
</script>