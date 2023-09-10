<nav class="navbar navbar-expand-xl navbar-dark header-navbar text-uppercase">
    <div class="container-fluid px-0">
        <style>
            #collapse-mobile-siderbar .position-absolute {
                position: absolute
            }

            #collapse-mobile-siderbar .left-0 {
                left: 0
            }

            #collapse-mobile-siderbar figure.w-25 {
                width: 25% !important
            }
        </style>
        <a class="navbar-brand" href="<?php echo base_url(); ?>'">
            <img src="<?php echo asset('fonts/logo-black.svg'); ?>" alt="KAS PVT LTD" title="KAS PVT LTD" class="logo-img logo-black">
            <img src="<?php echo asset('fonts/logo-white.svg'); ?>" alt="KAS PVT LTD" title="KAS PVT LTD" class="logo-img logo-white">
        </a>
        <div class="collapse navbar-collapse collapse-sidebar" id="collapse-mobile-siderbar">
            <ul class="navbar-nav mr-auto navbar-nav-destop">

                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">HR Consultancy</a>
                    <ul class="dropdown-menu submenu">
                        <div class="container-fluid submenu-inner">
                            <div class="row">
                                <div class="col-lg-2">
                                    <p class="dropdown-item nav-link font-semibold">Experience</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('digital-workplace-services') ?>">Digital Workplace Services</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('product-enhancement') ?>">Product Enhancement</a>
                                    <p class="dropdown-item nav-link font-semibold">Insights</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('ai-ml-development-services') ?>">AI & Automation </a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('data-analytics-services') ?>">Data Analytics</a>
                                    <p class="dropdown-item nav-link font-semibold">SAP Solutions</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('sap-consulting-services') ?>">SAP Consultation</a>
                                </div>
                                <div class="col-lg-2">
                                    <p class="dropdown-item nav-link font-semibold">Innovate</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-rpa-developer') ?>">Robotic Process Automation</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('software-engineering') ?>">Software Engineering</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('web-development-services') ?>">Web Development</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('internet-of-things-consulting-services') ?>">Internet of Things (IoT)</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-data-scientist') ?>">Data Science</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-ai-developer') ?>">Artificial Intelligence</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-ml-developer') ?>">Machine Learning</a>
                                </div>
                                <div class="col-lg-2">
                                    <p class="dropdown-item nav-link font-semibold">Accelerate</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('cloud-native-application-development') ?>">Cloud - KAS PVT LTD Combat</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('digital-process-automation') ?>">Digital Process Automation </a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('open-source-web-development') ?>">Open Source </a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('dynamics-365-consulting') ?>">Microsoft Dynamics</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('salesforce-consulting-service') ?>">Salesforce</a>
                                </div>
                                <div class="col-lg-2">
                                    <p class="dropdown-item nav-link font-semibold">Assure</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('quality-assurance-testing-services') ?>">Quality Assurance </a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('it-staff-augmentation-services') ?>">IT Staff Augmentation </a>
                                </div>

                            </div>
                        </div>
                        <div class="container-fluid header-contact">
                            <div class="row g-4 gy-lg-0">
                                <div class="col-md-5 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/skype-icon.webp'); ?>" type="image/webp">
                                                <source srcset="images/skype-icon.png" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAD0UlEQVRIiZ2VW2gcZRTHfzM72ewmmzabxqRubaUq7dqCUIukVh+sShFr3acqUQr1koJP1gsFQdSA1wel+iQilfqg1QhqEbVYoUSrptgNWJuq1UYqSdzNJulms0l2dy5yZmYnmdkNAf9wmPnO933nfs6ncPgSi/AQ8CBwAxAGZPML4DiwBrgSsIAMMAQMsgyqCkLAl8DO5S4E8DtwFHgLmKx3QHW/3/wP4YKNwPPAn8C+pRR0AzuWFKEAugVFA/K6Q7MGGJaz5yAOvAccCl7XgMfrClYVKJswrcMKjesTERJNKiYwXDD4O1eCvAmtGmgK9oYjS3L0xGIFm+taPWdAxeSpW+L0JGNsbG3wHfkpU+LtoQJHfilARHXIUXIAOAl8jpvkMuC/bVowY/D+rg72Xte8ZPQE7/42Q8+JHERVx2sHRTdsFcnBaM2tgsGOZMwTPlkyeaR/gs0fjrC1b4wXfs57Rx9NxtiZjDm5WYBcfAw3yR/UKNAt7kpEvOUb5woc/vRfhjJl0qPz9H6dZc+3OXuvZFpkpisQVoJS9uPmoA94xrdlWVQsy1vuXhvh2LY4Z8fLdl4kHJ8MXCaRK9thz0xVoKXBCe0CJLdrJAf3AR/5Q6Sz5eoo6dRqHzudLXFmoszpXIWB8RJnL85CxQLxVgzyybdxj3iwvobdojE4PMuBHyY5tL3NY9/Y0WhTj7uWSjo4cJnvLhYhUGUurlBZ3C5VKI6SN3+cYlPfKC8N5vl+rMS87jdxW2cj/fd2smVd1OmXWijiwXgNW8pt3oRwiPMXijw7PAcxjc6VGl2rGrgtEWH/phaaNce2F7vi7Lo06oTIb+4Fte5ELBpsaA/zWaqTV3evhkYVFItMQefY+Rme7Btjb/+Ed3xDiwZNmjM+/MiKB2lAaq7d25rWOXhnO6l1UVJAvmTyyvGso0i8U6CtUV04LpUltIjnoidEyh4bHcB2j62bhKIh7l/fZC/vSES4JhFFa1C5ti3MwzfHee2mVi8aL/9a4LRUVHMoqOCq6nuwyvXCgeWUau+tbTy3dWW95Hk4+leR7q/GHeu1mnopVz2YAySod9ts8TSkcPKPIieyZQwZVqpCOKSIc4zMGvSPlehN5+k9NQWaDLtQvT6YDz6ZHwN77D/F9UTKTzq0WSMSUe0UzEpzzejOO7FCE+3BLq7iTFAB7mzqrjkqwqpVIh6K1bUdFMS+mrQDDwBPS/x8XImvxFlILF5e+CngSD0FgtelvGWQAv8sK6oW8uDcLj/1QhSEGNEFJN1ylgE64pIUhdBaeVyAc26I37GFAP8BhwNLM9Tem+MAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAD0UlEQVRIiZ2VW2gcZRTHfzM72ewmmzabxqRubaUq7dqCUIukVh+sShFr3acqUQr1koJP1gsFQdSA1wel+iQilfqg1QhqEbVYoUSrptgNWJuq1UYqSdzNJulms0l2dy5yZmYnmdkNAf9wmPnO933nfs6ncPgSi/AQ8CBwAxAGZPML4DiwBrgSsIAMMAQMsgyqCkLAl8DO5S4E8DtwFHgLmKx3QHW/3/wP4YKNwPPAn8C+pRR0AzuWFKEAugVFA/K6Q7MGGJaz5yAOvAccCl7XgMfrClYVKJswrcMKjesTERJNKiYwXDD4O1eCvAmtGmgK9oYjS3L0xGIFm+taPWdAxeSpW+L0JGNsbG3wHfkpU+LtoQJHfilARHXIUXIAOAl8jpvkMuC/bVowY/D+rg72Xte8ZPQE7/42Q8+JHERVx2sHRTdsFcnBaM2tgsGOZMwTPlkyeaR/gs0fjrC1b4wXfs57Rx9NxtiZjDm5WYBcfAw3yR/UKNAt7kpEvOUb5woc/vRfhjJl0qPz9H6dZc+3OXuvZFpkpisQVoJS9uPmoA94xrdlWVQsy1vuXhvh2LY4Z8fLdl4kHJ8MXCaRK9thz0xVoKXBCe0CJLdrJAf3AR/5Q6Sz5eoo6dRqHzudLXFmoszpXIWB8RJnL85CxQLxVgzyybdxj3iwvobdojE4PMuBHyY5tL3NY9/Y0WhTj7uWSjo4cJnvLhYhUGUurlBZ3C5VKI6SN3+cYlPfKC8N5vl+rMS87jdxW2cj/fd2smVd1OmXWijiwXgNW8pt3oRwiPMXijw7PAcxjc6VGl2rGrgtEWH/phaaNce2F7vi7Lo06oTIb+4Fte5ELBpsaA/zWaqTV3evhkYVFItMQefY+Rme7Btjb/+Ed3xDiwZNmjM+/MiKB2lAaq7d25rWOXhnO6l1UVJAvmTyyvGso0i8U6CtUV04LpUltIjnoidEyh4bHcB2j62bhKIh7l/fZC/vSES4JhFFa1C5ti3MwzfHee2mVi8aL/9a4LRUVHMoqOCq6nuwyvXCgeWUau+tbTy3dWW95Hk4+leR7q/GHeu1mnopVz2YAySod9ts8TSkcPKPIieyZQwZVqpCOKSIc4zMGvSPlehN5+k9NQWaDLtQvT6YDz6ZHwN77D/F9UTKTzq0WSMSUe0UzEpzzejOO7FCE+3BLq7iTFAB7mzqrjkqwqpVIh6K1bUdFMS+mrQDDwBPS/x8XImvxFlILF5e+CngSD0FgtelvGWQAv8sK6oW8uDcLj/1QhSEGNEFJN1ylgE64pIUhdBaeVyAc26I37GFAP8BhwNLM9Tem+MAAAAASUVORK5CYII=" alt="Skype" title="Skype" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">Skype ID </p>
                                            <a class="h6 " href="skype:KAS PVT LTD?call">KAS PVT LTD</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/gmail-icon.webp'); ?>" type="image/webp">
                                                <source srcset="<?php echo asset('images/gmail-icon.png'); ?>" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAASCAYAAABB7B6eAAADbklEQVQ4jZWV3W8UVRjGf+djZj9mu2Vb7BbSGsOFxs/oTaPeEOXGf0CxCQTDhUYjsaRFxSaaQGoVQRDiRxruDfFK8Maod35cafRKo2GxBaTQbj/Y3ZndmZ05Zs5SUlMo9U3Oxbw553me877PeUdc2bH9GdHTeyq3f7TsPvEkCWBqNZCS/xVJgujqIj0V/vIzzWNH5pKrs/vF3PCztfbMdCEJArIv7CW7bwSR7vd9ewgh1gc2xu6RnocBmlOf0To9BY6DMzAQyKBWz2cHBlB9ZZqffkx9zy7af/yOyucR+XyHZD3VuRzK84grFeov7qV54hiyVCJ/9yBBveGqnZt6xqSSGU+CyHvEly8RnjsLrovz6GOITAYThh3A1bcxBtnVhZCS1hdn8N96g+TiDPquPhxHsxwlzM5VGykslyszXO3uQQwOogVWVfD+u9T3vUJ85R9UoWAJbTnSpbXNJfPz1MdG8A+9Y3NaKdTWrcz19nGpMo1JDFIpiVpewi9vIfjwJPH2p1DVeXT/FqIfv6e+e5jmV2eRrosoFOySmQytb76mtut5ou++RZf7UQtV4qHH8Y+fojF4D2phgRTbWkUohV5cJCmVCCY/oDX6OoQhjpuBdow//iaNt8chimx1/InDNA6MYgIfJ+1TENB69TWCoydIenvRi1WE6rhQ36ypUoilJUQYEu7eQ/zwI2SOH0X99iui3E947kuS2VmE1rR/+gFV7kNeu0Z8/4OEI6O0h4aQ8/P2dkh1s196tSms95tNZKVC/MBDBCc/wT09hXPmc3SxSPLXnxhjUN2bENUq0XPDtF56GVPsRl64YEWSy/0Xco31UmYpkRdnoN2mNXqA1uQRTKnH9kpfX8Z4Hs3DkzQPjndApv/unLvFm9FrMqtLtryMqNeJnt5BfO99ZN6bQIQRrYPjxNu2IWc6Iqzy28TtCVZKlvq9UsH0bqZ5aKJjU8dFnj/fAb7DSFmfwD7WzriQi1VIXZWWoXZ9XdUbIkibmYLnUxum1vR91A2bIjY+CG9JkNyYP4VCgVwuZ8miKLJLbVD5Skhj8FYn4ji2IMVikWw2S7vdtoQpWZpfId9g5NNR0TJJ0ilJHFvFKbjW2pKtlEtKaUlWvjcYsTZxvBMhPgI2e56H67okYbhGafrtOI7tSdoPcaf/BFSBsX8B7tBq7iAkA4kAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAASCAYAAABB7B6eAAADbklEQVQ4jZWV3W8UVRjGf+djZj9mu2Vb7BbSGsOFxs/oTaPeEOXGf0CxCQTDhUYjsaRFxSaaQGoVQRDiRxruDfFK8Maod35cafRKo2GxBaTQbj/Y3ZndmZ05Zs5SUlMo9U3Oxbw553me877PeUdc2bH9GdHTeyq3f7TsPvEkCWBqNZCS/xVJgujqIj0V/vIzzWNH5pKrs/vF3PCztfbMdCEJArIv7CW7bwSR7vd9ewgh1gc2xu6RnocBmlOf0To9BY6DMzAQyKBWz2cHBlB9ZZqffkx9zy7af/yOyucR+XyHZD3VuRzK84grFeov7qV54hiyVCJ/9yBBveGqnZt6xqSSGU+CyHvEly8RnjsLrovz6GOITAYThh3A1bcxBtnVhZCS1hdn8N96g+TiDPquPhxHsxwlzM5VGykslyszXO3uQQwOogVWVfD+u9T3vUJ85R9UoWAJbTnSpbXNJfPz1MdG8A+9Y3NaKdTWrcz19nGpMo1JDFIpiVpewi9vIfjwJPH2p1DVeXT/FqIfv6e+e5jmV2eRrosoFOySmQytb76mtut5ou++RZf7UQtV4qHH8Y+fojF4D2phgRTbWkUohV5cJCmVCCY/oDX6OoQhjpuBdow//iaNt8chimx1/InDNA6MYgIfJ+1TENB69TWCoydIenvRi1WE6rhQ36ypUoilJUQYEu7eQ/zwI2SOH0X99iui3E947kuS2VmE1rR/+gFV7kNeu0Z8/4OEI6O0h4aQ8/P2dkh1s196tSms95tNZKVC/MBDBCc/wT09hXPmc3SxSPLXnxhjUN2bENUq0XPDtF56GVPsRl64YEWSy/0Xco31UmYpkRdnoN2mNXqA1uQRTKnH9kpfX8Z4Hs3DkzQPjndApv/unLvFm9FrMqtLtryMqNeJnt5BfO99ZN6bQIQRrYPjxNu2IWc6Iqzy28TtCVZKlvq9UsH0bqZ5aKJjU8dFnj/fAb7DSFmfwD7WzriQi1VIXZWWoXZ9XdUbIkibmYLnUxum1vR91A2bIjY+CG9JkNyYP4VCgVwuZ8miKLJLbVD5Skhj8FYn4ji2IMVikWw2S7vdtoQpWZpfId9g5NNR0TJJ0ilJHFvFKbjW2pKtlEtKaUlWvjcYsTZxvBMhPgI2e56H67okYbhGafrtOI7tSdoPcaf/BFSBsX8B7tBq7iAkA4kAAAAASUVORK5CYII=" alt="Gmail" title="Gmail" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">Email Us</p>
                                            <a class="h6 " href="/cdn-cgi/l/email-protection#71021e1d0405181e1f0231131012101f12085f121e1c"><span class="__cf_email__" data-cfemail="fb8894978e8f92949588bb999a989a959882d5989496">[email protected]</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/call-yellow-icon.webp'); ?>" type="image/webp">
                                                <source srcset="<?php echo asset('images/call-yellow-icon.png'); ?>" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAY1BMVEUAAAD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD////+9Ov2jTT6vor2iSv+9u797N3969v83sT6xpn5uoT5r3D3nE32lED959VL17lWAAAAEXRSTlMAHvN3+eSnubhwV6YgWU7XIs+DM+EAAAC8SURBVCjPdZJZDsMgDETZs3YxIWRPe/9TFgKkFm3ej9GM7JFsSITyQgr2KHlLMLSBk4Z+9TsDBLslvYKMKug1/FAf892cSevO4mk+x+dqxw4I5Rp8HZyxAYYS7svsjB4wnJS+rC7DAKYk0heTN4Ak4qhL3iGiYUf9NmD6bbfJkOHxGnTXd9plpVEFRGfUgRTOIWIXbHDSwolZ50FP4e3OouAPKi4xh9GrtV8d6vq0CapQLg0a/j5CFvwZhQ806x39smsfBAAAAABJRU5ErkJggg==" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAY1BMVEUAAAD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD////+9Ov2jTT6vor2iSv+9u797N3969v83sT6xpn5uoT5r3D3nE32lED959VL17lWAAAAEXRSTlMAHvN3+eSnubhwV6YgWU7XIs+DM+EAAAC8SURBVCjPdZJZDsMgDETZs3YxIWRPe/9TFgKkFm3ej9GM7JFsSITyQgr2KHlLMLSBk4Z+9TsDBLslvYKMKug1/FAf892cSevO4mk+x+dqxw4I5Rp8HZyxAYYS7svsjB4wnJS+rC7DAKYk0heTN4Ak4qhL3iGiYUf9NmD6bbfJkOHxGnTXd9plpVEFRGfUgRTOIWIXbHDSwolZ50FP4e3OouAPKi4xh9GrtV8d6vq0CapQLg0a/j5CFvwZhQ806x39smsfBAAAAABJRU5ErkJggg==" alt="Phone" title="Phone" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">USA</p>
                                            <h4 class="h6 ">
                                                <a href="tel:+13474414161" class>+1 347 441 4161</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/wp-icon.webp'); ?>" type="image/webp">
                                                <source srcset="<?php echo asset('images/wp-icon.png') ?>" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAAGgrv1cAAAAqFBMVEUnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAxsmc0s2k5tW06tW48tnBGundTv4BUv4F1y5mI0qeN1KuO1ayc2rbF6dXW8OHc8uXe8+fq9+/s+PHu+fPv+fP4/Pr///8WddykAAAAIHRSTlMAHh8gISJOV1hZWm9xc3d4paanuLnX4+Ty8/j5+vz9/k+mUl0AAAEPSURBVCjPZZDZVsJAEERvXHBBQQ0agzi5Km7ghqj9/3/mwyQc0HqZXqp6uhqGOwxCtg2oQcUfQbVhbKiQ1GPgogT2VMHvZxW9z89NmLIOoKeqNYB+xK2qZ1Q6i7vcZKQ+xDzyJ7UdCoAz1VQAQDEanw9zyGUmHQA0nWQPTjSW7WTUiJwMUOMzJxXqa0u7QvVr+RlLLUmqrxGh2xSrbWqg38ZN3iZlMx2K0+uOnE6LVbmf3EBzlNm1/1AXsJVUIyKe1jppi1LVt4h4WdeUjFWd/sR8Y9gVVQ5uFvF+7/Tl+fG2NT/oOA+LyGhPlM+dMZ29fcfHyuJ+83fbZr912LvcMHHIGorhqJpMqtFwty38At+EPFjEzQ5QAAAAAElFTkSuQmCC" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAAGgrv1cAAAAqFBMVEUnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAxsmc0s2k5tW06tW48tnBGundTv4BUv4F1y5mI0qeN1KuO1ayc2rbF6dXW8OHc8uXe8+fq9+/s+PHu+fPv+fP4/Pr///8WddykAAAAIHRSTlMAHh8gISJOV1hZWm9xc3d4paanuLnX4+Ty8/j5+vz9/k+mUl0AAAEPSURBVCjPZZDZVsJAEERvXHBBQQ0agzi5Km7ghqj9/3/mwyQc0HqZXqp6uhqGOwxCtg2oQcUfQbVhbKiQ1GPgogT2VMHvZxW9z89NmLIOoKeqNYB+xK2qZ1Q6i7vcZKQ+xDzyJ7UdCoAz1VQAQDEanw9zyGUmHQA0nWQPTjSW7WTUiJwMUOMzJxXqa0u7QvVr+RlLLUmqrxGh2xSrbWqg38ZN3iZlMx2K0+uOnE6LVbmf3EBzlNm1/1AXsJVUIyKe1jppi1LVt4h4WdeUjFWd/sR8Y9gVVQ5uFvF+7/Tl+fG2NT/oOA+LyGhPlM+dMZ29fcfHyuJ+83fbZr912LvcMHHIGorhqJpMqtFwty38At+EPFjEzQ5QAAAAAElFTkSuQmCC" alt="Phone" title="Phone" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">UK</p>
                                            <h4 class="h6 ">
                                                <a href="tel:+4402079938766" class>+44 020 7993 8766</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">what we do</a>
                    <ul class="dropdown-menu submenu">
                        <div class="container-fluid submenu-inner">
                            <div class="row">
                                <div class="col-lg-2">
                                    <p class="dropdown-item nav-link font-semibold">Experience</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('digital-workplace-services') ?>">Digital Workplace Services</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('product-enhancement') ?>">Product Enhancement</a>
                                    <p class="dropdown-item nav-link font-semibold">Insights</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('ai-ml-development-services') ?>">AI & Automation </a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('data-analytics-services') ?>">Data Analytics</a>
                                    <p class="dropdown-item nav-link font-semibold">SAP Solutions</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('sap-consulting-services') ?>">SAP Consultation</a>
                                </div>
                                <div class="col-lg-2">
                                    <p class="dropdown-item nav-link font-semibold">Innovate</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-rpa-developer') ?>">Robotic Process Automation</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('software-engineering') ?>">Software Engineering</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('web-development-services') ?>">Web Development</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('internet-of-things-consulting-services') ?>">Internet of Things (IoT)</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-data-scientist') ?>">Data Science</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-ai-developer') ?>">Artificial Intelligence</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-ml-developer') ?>">Machine Learning</a>
                                </div>
                                <div class="col-lg-2">
                                    <p class="dropdown-item nav-link font-semibold">Accelerate</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('cloud-native-application-development') ?>">Cloud - KAS PVT LTD Combat</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('digital-process-automation') ?>">Digital Process Automation </a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('open-source-web-development') ?>">Open Source </a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('dynamics-365-consulting') ?>">Microsoft Dynamics</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('salesforce-consulting-service') ?>">Salesforce</a>
                                </div>
                                <div class="col-lg-2">
                                    <p class="dropdown-item nav-link font-semibold">Assure</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('quality-assurance-testing-services') ?>">Quality Assurance </a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('it-staff-augmentation-services') ?>">IT Staff Augmentation </a>
                                </div>

                            </div>
                        </div>
                        <div class="container-fluid header-contact">
                            <div class="row g-4 gy-lg-0">
                                <div class="col-md-5 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/skype-icon.webp'); ?>" type="image/webp">
                                                <source srcset="images/skype-icon.png" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAD0UlEQVRIiZ2VW2gcZRTHfzM72ewmmzabxqRubaUq7dqCUIukVh+sShFr3acqUQr1koJP1gsFQdSA1wel+iQilfqg1QhqEbVYoUSrptgNWJuq1UYqSdzNJulms0l2dy5yZmYnmdkNAf9wmPnO933nfs6ncPgSi/AQ8CBwAxAGZPML4DiwBrgSsIAMMAQMsgyqCkLAl8DO5S4E8DtwFHgLmKx3QHW/3/wP4YKNwPPAn8C+pRR0AzuWFKEAugVFA/K6Q7MGGJaz5yAOvAccCl7XgMfrClYVKJswrcMKjesTERJNKiYwXDD4O1eCvAmtGmgK9oYjS3L0xGIFm+taPWdAxeSpW+L0JGNsbG3wHfkpU+LtoQJHfilARHXIUXIAOAl8jpvkMuC/bVowY/D+rg72Xte8ZPQE7/42Q8+JHERVx2sHRTdsFcnBaM2tgsGOZMwTPlkyeaR/gs0fjrC1b4wXfs57Rx9NxtiZjDm5WYBcfAw3yR/UKNAt7kpEvOUb5woc/vRfhjJl0qPz9H6dZc+3OXuvZFpkpisQVoJS9uPmoA94xrdlWVQsy1vuXhvh2LY4Z8fLdl4kHJ8MXCaRK9thz0xVoKXBCe0CJLdrJAf3AR/5Q6Sz5eoo6dRqHzudLXFmoszpXIWB8RJnL85CxQLxVgzyybdxj3iwvobdojE4PMuBHyY5tL3NY9/Y0WhTj7uWSjo4cJnvLhYhUGUurlBZ3C5VKI6SN3+cYlPfKC8N5vl+rMS87jdxW2cj/fd2smVd1OmXWijiwXgNW8pt3oRwiPMXijw7PAcxjc6VGl2rGrgtEWH/phaaNce2F7vi7Lo06oTIb+4Fte5ELBpsaA/zWaqTV3evhkYVFItMQefY+Rme7Btjb/+Ed3xDiwZNmjM+/MiKB2lAaq7d25rWOXhnO6l1UVJAvmTyyvGso0i8U6CtUV04LpUltIjnoidEyh4bHcB2j62bhKIh7l/fZC/vSES4JhFFa1C5ti3MwzfHee2mVi8aL/9a4LRUVHMoqOCq6nuwyvXCgeWUau+tbTy3dWW95Hk4+leR7q/GHeu1mnopVz2YAySod9ts8TSkcPKPIieyZQwZVqpCOKSIc4zMGvSPlehN5+k9NQWaDLtQvT6YDz6ZHwN77D/F9UTKTzq0WSMSUe0UzEpzzejOO7FCE+3BLq7iTFAB7mzqrjkqwqpVIh6K1bUdFMS+mrQDDwBPS/x8XImvxFlILF5e+CngSD0FgtelvGWQAv8sK6oW8uDcLj/1QhSEGNEFJN1ylgE64pIUhdBaeVyAc26I37GFAP8BhwNLM9Tem+MAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAD0UlEQVRIiZ2VW2gcZRTHfzM72ewmmzabxqRubaUq7dqCUIukVh+sShFr3acqUQr1koJP1gsFQdSA1wel+iQilfqg1QhqEbVYoUSrptgNWJuq1UYqSdzNJulms0l2dy5yZmYnmdkNAf9wmPnO933nfs6ncPgSi/AQ8CBwAxAGZPML4DiwBrgSsIAMMAQMsgyqCkLAl8DO5S4E8DtwFHgLmKx3QHW/3/wP4YKNwPPAn8C+pRR0AzuWFKEAugVFA/K6Q7MGGJaz5yAOvAccCl7XgMfrClYVKJswrcMKjesTERJNKiYwXDD4O1eCvAmtGmgK9oYjS3L0xGIFm+taPWdAxeSpW+L0JGNsbG3wHfkpU+LtoQJHfilARHXIUXIAOAl8jpvkMuC/bVowY/D+rg72Xte8ZPQE7/42Q8+JHERVx2sHRTdsFcnBaM2tgsGOZMwTPlkyeaR/gs0fjrC1b4wXfs57Rx9NxtiZjDm5WYBcfAw3yR/UKNAt7kpEvOUb5woc/vRfhjJl0qPz9H6dZc+3OXuvZFpkpisQVoJS9uPmoA94xrdlWVQsy1vuXhvh2LY4Z8fLdl4kHJ8MXCaRK9thz0xVoKXBCe0CJLdrJAf3AR/5Q6Sz5eoo6dRqHzudLXFmoszpXIWB8RJnL85CxQLxVgzyybdxj3iwvobdojE4PMuBHyY5tL3NY9/Y0WhTj7uWSjo4cJnvLhYhUGUurlBZ3C5VKI6SN3+cYlPfKC8N5vl+rMS87jdxW2cj/fd2smVd1OmXWijiwXgNW8pt3oRwiPMXijw7PAcxjc6VGl2rGrgtEWH/phaaNce2F7vi7Lo06oTIb+4Fte5ELBpsaA/zWaqTV3evhkYVFItMQefY+Rme7Btjb/+Ed3xDiwZNmjM+/MiKB2lAaq7d25rWOXhnO6l1UVJAvmTyyvGso0i8U6CtUV04LpUltIjnoidEyh4bHcB2j62bhKIh7l/fZC/vSES4JhFFa1C5ti3MwzfHee2mVi8aL/9a4LRUVHMoqOCq6nuwyvXCgeWUau+tbTy3dWW95Hk4+leR7q/GHeu1mnopVz2YAySod9ts8TSkcPKPIieyZQwZVqpCOKSIc4zMGvSPlehN5+k9NQWaDLtQvT6YDz6ZHwN77D/F9UTKTzq0WSMSUe0UzEpzzejOO7FCE+3BLq7iTFAB7mzqrjkqwqpVIh6K1bUdFMS+mrQDDwBPS/x8XImvxFlILF5e+CngSD0FgtelvGWQAv8sK6oW8uDcLj/1QhSEGNEFJN1ylgE64pIUhdBaeVyAc26I37GFAP8BhwNLM9Tem+MAAAAASUVORK5CYII=" alt="Skype" title="Skype" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">Skype ID </p>
                                            <a class="h6 " href="skype:KAS PVT LTD?call">KAS PVT LTD</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/gmail-icon.webp'); ?>" type="image/webp">
                                                <source srcset="<?php echo asset('images/gmail-icon.png'); ?>" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAASCAYAAABB7B6eAAADbklEQVQ4jZWV3W8UVRjGf+djZj9mu2Vb7BbSGsOFxs/oTaPeEOXGf0CxCQTDhUYjsaRFxSaaQGoVQRDiRxruDfFK8Maod35cafRKo2GxBaTQbj/Y3ZndmZ05Zs5SUlMo9U3Oxbw553me877PeUdc2bH9GdHTeyq3f7TsPvEkCWBqNZCS/xVJgujqIj0V/vIzzWNH5pKrs/vF3PCztfbMdCEJArIv7CW7bwSR7vd9ewgh1gc2xu6RnocBmlOf0To9BY6DMzAQyKBWz2cHBlB9ZZqffkx9zy7af/yOyucR+XyHZD3VuRzK84grFeov7qV54hiyVCJ/9yBBveGqnZt6xqSSGU+CyHvEly8RnjsLrovz6GOITAYThh3A1bcxBtnVhZCS1hdn8N96g+TiDPquPhxHsxwlzM5VGykslyszXO3uQQwOogVWVfD+u9T3vUJ85R9UoWAJbTnSpbXNJfPz1MdG8A+9Y3NaKdTWrcz19nGpMo1JDFIpiVpewi9vIfjwJPH2p1DVeXT/FqIfv6e+e5jmV2eRrosoFOySmQytb76mtut5ou++RZf7UQtV4qHH8Y+fojF4D2phgRTbWkUohV5cJCmVCCY/oDX6OoQhjpuBdow//iaNt8chimx1/InDNA6MYgIfJ+1TENB69TWCoydIenvRi1WE6rhQ36ypUoilJUQYEu7eQ/zwI2SOH0X99iui3E947kuS2VmE1rR/+gFV7kNeu0Z8/4OEI6O0h4aQ8/P2dkh1s196tSms95tNZKVC/MBDBCc/wT09hXPmc3SxSPLXnxhjUN2bENUq0XPDtF56GVPsRl64YEWSy/0Xco31UmYpkRdnoN2mNXqA1uQRTKnH9kpfX8Z4Hs3DkzQPjndApv/unLvFm9FrMqtLtryMqNeJnt5BfO99ZN6bQIQRrYPjxNu2IWc6Iqzy28TtCVZKlvq9UsH0bqZ5aKJjU8dFnj/fAb7DSFmfwD7WzriQi1VIXZWWoXZ9XdUbIkibmYLnUxum1vR91A2bIjY+CG9JkNyYP4VCgVwuZ8miKLJLbVD5Skhj8FYn4ji2IMVikWw2S7vdtoQpWZpfId9g5NNR0TJJ0ilJHFvFKbjW2pKtlEtKaUlWvjcYsTZxvBMhPgI2e56H67okYbhGafrtOI7tSdoPcaf/BFSBsX8B7tBq7iAkA4kAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAASCAYAAABB7B6eAAADbklEQVQ4jZWV3W8UVRjGf+djZj9mu2Vb7BbSGsOFxs/oTaPeEOXGf0CxCQTDhUYjsaRFxSaaQGoVQRDiRxruDfFK8Maod35cafRKo2GxBaTQbj/Y3ZndmZ05Zs5SUlMo9U3Oxbw553me877PeUdc2bH9GdHTeyq3f7TsPvEkCWBqNZCS/xVJgujqIj0V/vIzzWNH5pKrs/vF3PCztfbMdCEJArIv7CW7bwSR7vd9ewgh1gc2xu6RnocBmlOf0To9BY6DMzAQyKBWz2cHBlB9ZZqffkx9zy7af/yOyucR+XyHZD3VuRzK84grFeov7qV54hiyVCJ/9yBBveGqnZt6xqSSGU+CyHvEly8RnjsLrovz6GOITAYThh3A1bcxBtnVhZCS1hdn8N96g+TiDPquPhxHsxwlzM5VGykslyszXO3uQQwOogVWVfD+u9T3vUJ85R9UoWAJbTnSpbXNJfPz1MdG8A+9Y3NaKdTWrcz19nGpMo1JDFIpiVpewi9vIfjwJPH2p1DVeXT/FqIfv6e+e5jmV2eRrosoFOySmQytb76mtut5ou++RZf7UQtV4qHH8Y+fojF4D2phgRTbWkUohV5cJCmVCCY/oDX6OoQhjpuBdow//iaNt8chimx1/InDNA6MYgIfJ+1TENB69TWCoydIenvRi1WE6rhQ36ypUoilJUQYEu7eQ/zwI2SOH0X99iui3E947kuS2VmE1rR/+gFV7kNeu0Z8/4OEI6O0h4aQ8/P2dkh1s196tSms95tNZKVC/MBDBCc/wT09hXPmc3SxSPLXnxhjUN2bENUq0XPDtF56GVPsRl64YEWSy/0Xco31UmYpkRdnoN2mNXqA1uQRTKnH9kpfX8Z4Hs3DkzQPjndApv/unLvFm9FrMqtLtryMqNeJnt5BfO99ZN6bQIQRrYPjxNu2IWc6Iqzy28TtCVZKlvq9UsH0bqZ5aKJjU8dFnj/fAb7DSFmfwD7WzriQi1VIXZWWoXZ9XdUbIkibmYLnUxum1vR91A2bIjY+CG9JkNyYP4VCgVwuZ8miKLJLbVD5Skhj8FYn4ji2IMVikWw2S7vdtoQpWZpfId9g5NNR0TJJ0ilJHFvFKbjW2pKtlEtKaUlWvjcYsTZxvBMhPgI2e56H67okYbhGafrtOI7tSdoPcaf/BFSBsX8B7tBq7iAkA4kAAAAASUVORK5CYII=" alt="Gmail" title="Gmail" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">Email Us</p>
                                            <a class="h6 " href="/cdn-cgi/l/email-protection#71021e1d0405181e1f0231131012101f12085f121e1c"><span class="__cf_email__" data-cfemail="fb8894978e8f92949588bb999a989a959882d5989496">[email protected]</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/call-yellow-icon.webp'); ?>" type="image/webp">
                                                <source srcset="<?php echo asset('images/call-yellow-icon.png'); ?>" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAY1BMVEUAAAD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD////+9Ov2jTT6vor2iSv+9u797N3969v83sT6xpn5uoT5r3D3nE32lED959VL17lWAAAAEXRSTlMAHvN3+eSnubhwV6YgWU7XIs+DM+EAAAC8SURBVCjPdZJZDsMgDETZs3YxIWRPe/9TFgKkFm3ej9GM7JFsSITyQgr2KHlLMLSBk4Z+9TsDBLslvYKMKug1/FAf892cSevO4mk+x+dqxw4I5Rp8HZyxAYYS7svsjB4wnJS+rC7DAKYk0heTN4Ak4qhL3iGiYUf9NmD6bbfJkOHxGnTXd9plpVEFRGfUgRTOIWIXbHDSwolZ50FP4e3OouAPKi4xh9GrtV8d6vq0CapQLg0a/j5CFvwZhQ806x39smsfBAAAAABJRU5ErkJggg==" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAY1BMVEUAAAD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD////+9Ov2jTT6vor2iSv+9u797N3969v83sT6xpn5uoT5r3D3nE32lED959VL17lWAAAAEXRSTlMAHvN3+eSnubhwV6YgWU7XIs+DM+EAAAC8SURBVCjPdZJZDsMgDETZs3YxIWRPe/9TFgKkFm3ej9GM7JFsSITyQgr2KHlLMLSBk4Z+9TsDBLslvYKMKug1/FAf892cSevO4mk+x+dqxw4I5Rp8HZyxAYYS7svsjB4wnJS+rC7DAKYk0heTN4Ak4qhL3iGiYUf9NmD6bbfJkOHxGnTXd9plpVEFRGfUgRTOIWIXbHDSwolZ50FP4e3OouAPKi4xh9GrtV8d6vq0CapQLg0a/j5CFvwZhQ806x39smsfBAAAAABJRU5ErkJggg==" alt="Phone" title="Phone" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">USA</p>
                                            <h4 class="h6 ">
                                                <a href="tel:+13474414161" class>+1 347 441 4161</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/wp-icon.webp'); ?>" type="image/webp">
                                                <source srcset="images/wp-icon.png" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAAGgrv1cAAAAqFBMVEUnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAxsmc0s2k5tW06tW48tnBGundTv4BUv4F1y5mI0qeN1KuO1ayc2rbF6dXW8OHc8uXe8+fq9+/s+PHu+fPv+fP4/Pr///8WddykAAAAIHRSTlMAHh8gISJOV1hZWm9xc3d4paanuLnX4+Ty8/j5+vz9/k+mUl0AAAEPSURBVCjPZZDZVsJAEERvXHBBQQ0agzi5Km7ghqj9/3/mwyQc0HqZXqp6uhqGOwxCtg2oQcUfQbVhbKiQ1GPgogT2VMHvZxW9z89NmLIOoKeqNYB+xK2qZ1Q6i7vcZKQ+xDzyJ7UdCoAz1VQAQDEanw9zyGUmHQA0nWQPTjSW7WTUiJwMUOMzJxXqa0u7QvVr+RlLLUmqrxGh2xSrbWqg38ZN3iZlMx2K0+uOnE6LVbmf3EBzlNm1/1AXsJVUIyKe1jppi1LVt4h4WdeUjFWd/sR8Y9gVVQ5uFvF+7/Tl+fG2NT/oOA+LyGhPlM+dMZ29fcfHyuJ+83fbZr912LvcMHHIGorhqJpMqtFwty38At+EPFjEzQ5QAAAAAElFTkSuQmCC" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAAGgrv1cAAAAqFBMVEUnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAxsmc0s2k5tW06tW48tnBGundTv4BUv4F1y5mI0qeN1KuO1ayc2rbF6dXW8OHc8uXe8+fq9+/s+PHu+fPv+fP4/Pr///8WddykAAAAIHRSTlMAHh8gISJOV1hZWm9xc3d4paanuLnX4+Ty8/j5+vz9/k+mUl0AAAEPSURBVCjPZZDZVsJAEERvXHBBQQ0agzi5Km7ghqj9/3/mwyQc0HqZXqp6uhqGOwxCtg2oQcUfQbVhbKiQ1GPgogT2VMHvZxW9z89NmLIOoKeqNYB+xK2qZ1Q6i7vcZKQ+xDzyJ7UdCoAz1VQAQDEanw9zyGUmHQA0nWQPTjSW7WTUiJwMUOMzJxXqa0u7QvVr+RlLLUmqrxGh2xSrbWqg38ZN3iZlMx2K0+uOnE6LVbmf3EBzlNm1/1AXsJVUIyKe1jppi1LVt4h4WdeUjFWd/sR8Y9gVVQ5uFvF+7/Tl+fG2NT/oOA+LyGhPlM+dMZ29fcfHyuJ+83fbZr912LvcMHHIGorhqJpMqtFwty38At+EPFjEzQ5QAAAAAElFTkSuQmCC" alt="Phone" title="Phone" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">UK</p>
                                            <h4 class="h6 ">
                                                <a href="tel:+4402079938766" class>+44 020 7993 8766</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">who we work with</a>
                    <ul class="dropdown-menu submenu">
                        <div class="container-fluid submenu-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <p class="dropdown-item nav-link font-semibold">Industries</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('banking-finance-insurance-software-development') ?>">Banking Financial services & Insurance</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('minimum-viable-product-development-service') ?>">Startups</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('oil-and-gas-enterprise-mobility-solution') ?>">Oil & Gas</a>
                                </div>
                                <div class="col-lg-3">
                                    <p class="dropdown-item nav-link opacity-0">not list</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('healthcare-application-software-development') ?>">Healthcare Life Science</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('real-estate-software-development') ?>">Real Estate & Construction </a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('logistics-mobile-application-development') ?>">Logistics </a>
                                </div>
                                <div class="col-lg-6">
                                    <div class="img-text position-relative">
                                        <picture>
                                            <source srcset="<?php echo asset('images/www-img.webp'); ?>" type="image/webp">
                                            <source srcset="images/www-img.jpg" type="image/jpeg"><img data-src="https://kasinfotech.com/main-boot-5/images/header/xwww-img.jpg.pagespeed.ic.-yjcivKMWc.webp" src="images/xwww-img.jpg.pagespeed.ic.-yjcivKMWc.webp" alt="KAS PVT LTD" title="KAS PVT LTD">
                                        </picture>
                                        <div class="img-text-inner">
                                            <p class="text-dark img-text-heading font-bold">Let’s grow together <b class="d-lg-block">Partner with us</b></p>
                                            <a href="<?php echo base_url('get-quote') ?>" class="text-uppercase text-primary">get quote<span class="long-arrow-icon-css icon-item right mt-0"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid header-contact">
                            <div class="row g-4 gy-lg-0">
                                <div class="col-md-5 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/skype-icon.webp'); ?>" type="image/webp">
                                                <source srcset="images/skype-icon.png" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAD0UlEQVRIiZ2VW2gcZRTHfzM72ewmmzabxqRubaUq7dqCUIukVh+sShFr3acqUQr1koJP1gsFQdSA1wel+iQilfqg1QhqEbVYoUSrptgNWJuq1UYqSdzNJulms0l2dy5yZmYnmdkNAf9wmPnO933nfs6ncPgSi/AQ8CBwAxAGZPML4DiwBrgSsIAMMAQMsgyqCkLAl8DO5S4E8DtwFHgLmKx3QHW/3/wP4YKNwPPAn8C+pRR0AzuWFKEAugVFA/K6Q7MGGJaz5yAOvAccCl7XgMfrClYVKJswrcMKjesTERJNKiYwXDD4O1eCvAmtGmgK9oYjS3L0xGIFm+taPWdAxeSpW+L0JGNsbG3wHfkpU+LtoQJHfilARHXIUXIAOAl8jpvkMuC/bVowY/D+rg72Xte8ZPQE7/42Q8+JHERVx2sHRTdsFcnBaM2tgsGOZMwTPlkyeaR/gs0fjrC1b4wXfs57Rx9NxtiZjDm5WYBcfAw3yR/UKNAt7kpEvOUb5woc/vRfhjJl0qPz9H6dZc+3OXuvZFpkpisQVoJS9uPmoA94xrdlWVQsy1vuXhvh2LY4Z8fLdl4kHJ8MXCaRK9thz0xVoKXBCe0CJLdrJAf3AR/5Q6Sz5eoo6dRqHzudLXFmoszpXIWB8RJnL85CxQLxVgzyybdxj3iwvobdojE4PMuBHyY5tL3NY9/Y0WhTj7uWSjo4cJnvLhYhUGUurlBZ3C5VKI6SN3+cYlPfKC8N5vl+rMS87jdxW2cj/fd2smVd1OmXWijiwXgNW8pt3oRwiPMXijw7PAcxjc6VGl2rGrgtEWH/phaaNce2F7vi7Lo06oTIb+4Fte5ELBpsaA/zWaqTV3evhkYVFItMQefY+Rme7Btjb/+Ed3xDiwZNmjM+/MiKB2lAaq7d25rWOXhnO6l1UVJAvmTyyvGso0i8U6CtUV04LpUltIjnoidEyh4bHcB2j62bhKIh7l/fZC/vSES4JhFFa1C5ti3MwzfHee2mVi8aL/9a4LRUVHMoqOCq6nuwyvXCgeWUau+tbTy3dWW95Hk4+leR7q/GHeu1mnopVz2YAySod9ts8TSkcPKPIieyZQwZVqpCOKSIc4zMGvSPlehN5+k9NQWaDLtQvT6YDz6ZHwN77D/F9UTKTzq0WSMSUe0UzEpzzejOO7FCE+3BLq7iTFAB7mzqrjkqwqpVIh6K1bUdFMS+mrQDDwBPS/x8XImvxFlILF5e+CngSD0FgtelvGWQAv8sK6oW8uDcLj/1QhSEGNEFJN1ylgE64pIUhdBaeVyAc26I37GFAP8BhwNLM9Tem+MAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAD0UlEQVRIiZ2VW2gcZRTHfzM72ewmmzabxqRubaUq7dqCUIukVh+sShFr3acqUQr1koJP1gsFQdSA1wel+iQilfqg1QhqEbVYoUSrptgNWJuq1UYqSdzNJulms0l2dy5yZmYnmdkNAf9wmPnO933nfs6ncPgSi/AQ8CBwAxAGZPML4DiwBrgSsIAMMAQMsgyqCkLAl8DO5S4E8DtwFHgLmKx3QHW/3/wP4YKNwPPAn8C+pRR0AzuWFKEAugVFA/K6Q7MGGJaz5yAOvAccCl7XgMfrClYVKJswrcMKjesTERJNKiYwXDD4O1eCvAmtGmgK9oYjS3L0xGIFm+taPWdAxeSpW+L0JGNsbG3wHfkpU+LtoQJHfilARHXIUXIAOAl8jpvkMuC/bVowY/D+rg72Xte8ZPQE7/42Q8+JHERVx2sHRTdsFcnBaM2tgsGOZMwTPlkyeaR/gs0fjrC1b4wXfs57Rx9NxtiZjDm5WYBcfAw3yR/UKNAt7kpEvOUb5woc/vRfhjJl0qPz9H6dZc+3OXuvZFpkpisQVoJS9uPmoA94xrdlWVQsy1vuXhvh2LY4Z8fLdl4kHJ8MXCaRK9thz0xVoKXBCe0CJLdrJAf3AR/5Q6Sz5eoo6dRqHzudLXFmoszpXIWB8RJnL85CxQLxVgzyybdxj3iwvobdojE4PMuBHyY5tL3NY9/Y0WhTj7uWSjo4cJnvLhYhUGUurlBZ3C5VKI6SN3+cYlPfKC8N5vl+rMS87jdxW2cj/fd2smVd1OmXWijiwXgNW8pt3oRwiPMXijw7PAcxjc6VGl2rGrgtEWH/phaaNce2F7vi7Lo06oTIb+4Fte5ELBpsaA/zWaqTV3evhkYVFItMQefY+Rme7Btjb/+Ed3xDiwZNmjM+/MiKB2lAaq7d25rWOXhnO6l1UVJAvmTyyvGso0i8U6CtUV04LpUltIjnoidEyh4bHcB2j62bhKIh7l/fZC/vSES4JhFFa1C5ti3MwzfHee2mVi8aL/9a4LRUVHMoqOCq6nuwyvXCgeWUau+tbTy3dWW95Hk4+leR7q/GHeu1mnopVz2YAySod9ts8TSkcPKPIieyZQwZVqpCOKSIc4zMGvSPlehN5+k9NQWaDLtQvT6YDz6ZHwN77D/F9UTKTzq0WSMSUe0UzEpzzejOO7FCE+3BLq7iTFAB7mzqrjkqwqpVIh6K1bUdFMS+mrQDDwBPS/x8XImvxFlILF5e+CngSD0FgtelvGWQAv8sK6oW8uDcLj/1QhSEGNEFJN1ylgE64pIUhdBaeVyAc26I37GFAP8BhwNLM9Tem+MAAAAASUVORK5CYII=" alt="Skype" title="Skype" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">Skype ID </p>
                                            <a class="h6 " href="skype:KAS PVT LTD?call">KAS PVT LTD</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/gmail-icon.webp'); ?>" type="image/webp">
                                                <source srcset="<?php echo asset('images/gmail-icon.png'); ?>" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAASCAYAAABB7B6eAAADbklEQVQ4jZWV3W8UVRjGf+djZj9mu2Vb7BbSGsOFxs/oTaPeEOXGf0CxCQTDhUYjsaRFxSaaQGoVQRDiRxruDfFK8Maod35cafRKo2GxBaTQbj/Y3ZndmZ05Zs5SUlMo9U3Oxbw553me877PeUdc2bH9GdHTeyq3f7TsPvEkCWBqNZCS/xVJgujqIj0V/vIzzWNH5pKrs/vF3PCztfbMdCEJArIv7CW7bwSR7vd9ewgh1gc2xu6RnocBmlOf0To9BY6DMzAQyKBWz2cHBlB9ZZqffkx9zy7af/yOyucR+XyHZD3VuRzK84grFeov7qV54hiyVCJ/9yBBveGqnZt6xqSSGU+CyHvEly8RnjsLrovz6GOITAYThh3A1bcxBtnVhZCS1hdn8N96g+TiDPquPhxHsxwlzM5VGykslyszXO3uQQwOogVWVfD+u9T3vUJ85R9UoWAJbTnSpbXNJfPz1MdG8A+9Y3NaKdTWrcz19nGpMo1JDFIpiVpewi9vIfjwJPH2p1DVeXT/FqIfv6e+e5jmV2eRrosoFOySmQytb76mtut5ou++RZf7UQtV4qHH8Y+fojF4D2phgRTbWkUohV5cJCmVCCY/oDX6OoQhjpuBdow//iaNt8chimx1/InDNA6MYgIfJ+1TENB69TWCoydIenvRi1WE6rhQ36ypUoilJUQYEu7eQ/zwI2SOH0X99iui3E947kuS2VmE1rR/+gFV7kNeu0Z8/4OEI6O0h4aQ8/P2dkh1s196tSms95tNZKVC/MBDBCc/wT09hXPmc3SxSPLXnxhjUN2bENUq0XPDtF56GVPsRl64YEWSy/0Xco31UmYpkRdnoN2mNXqA1uQRTKnH9kpfX8Z4Hs3DkzQPjndApv/unLvFm9FrMqtLtryMqNeJnt5BfO99ZN6bQIQRrYPjxNu2IWc6Iqzy28TtCVZKlvq9UsH0bqZ5aKJjU8dFnj/fAb7DSFmfwD7WzriQi1VIXZWWoXZ9XdUbIkibmYLnUxum1vR91A2bIjY+CG9JkNyYP4VCgVwuZ8miKLJLbVD5Skhj8FYn4ji2IMVikWw2S7vdtoQpWZpfId9g5NNR0TJJ0ilJHFvFKbjW2pKtlEtKaUlWvjcYsTZxvBMhPgI2e56H67okYbhGafrtOI7tSdoPcaf/BFSBsX8B7tBq7iAkA4kAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAASCAYAAABB7B6eAAADbklEQVQ4jZWV3W8UVRjGf+djZj9mu2Vb7BbSGsOFxs/oTaPeEOXGf0CxCQTDhUYjsaRFxSaaQGoVQRDiRxruDfFK8Maod35cafRKo2GxBaTQbj/Y3ZndmZ05Zs5SUlMo9U3Oxbw553me877PeUdc2bH9GdHTeyq3f7TsPvEkCWBqNZCS/xVJgujqIj0V/vIzzWNH5pKrs/vF3PCztfbMdCEJArIv7CW7bwSR7vd9ewgh1gc2xu6RnocBmlOf0To9BY6DMzAQyKBWz2cHBlB9ZZqffkx9zy7af/yOyucR+XyHZD3VuRzK84grFeov7qV54hiyVCJ/9yBBveGqnZt6xqSSGU+CyHvEly8RnjsLrovz6GOITAYThh3A1bcxBtnVhZCS1hdn8N96g+TiDPquPhxHsxwlzM5VGykslyszXO3uQQwOogVWVfD+u9T3vUJ85R9UoWAJbTnSpbXNJfPz1MdG8A+9Y3NaKdTWrcz19nGpMo1JDFIpiVpewi9vIfjwJPH2p1DVeXT/FqIfv6e+e5jmV2eRrosoFOySmQytb76mtut5ou++RZf7UQtV4qHH8Y+fojF4D2phgRTbWkUohV5cJCmVCCY/oDX6OoQhjpuBdow//iaNt8chimx1/InDNA6MYgIfJ+1TENB69TWCoydIenvRi1WE6rhQ36ypUoilJUQYEu7eQ/zwI2SOH0X99iui3E947kuS2VmE1rR/+gFV7kNeu0Z8/4OEI6O0h4aQ8/P2dkh1s196tSms95tNZKVC/MBDBCc/wT09hXPmc3SxSPLXnxhjUN2bENUq0XPDtF56GVPsRl64YEWSy/0Xco31UmYpkRdnoN2mNXqA1uQRTKnH9kpfX8Z4Hs3DkzQPjndApv/unLvFm9FrMqtLtryMqNeJnt5BfO99ZN6bQIQRrYPjxNu2IWc6Iqzy28TtCVZKlvq9UsH0bqZ5aKJjU8dFnj/fAb7DSFmfwD7WzriQi1VIXZWWoXZ9XdUbIkibmYLnUxum1vR91A2bIjY+CG9JkNyYP4VCgVwuZ8miKLJLbVD5Skhj8FYn4ji2IMVikWw2S7vdtoQpWZpfId9g5NNR0TJJ0ilJHFvFKbjW2pKtlEtKaUlWvjcYsTZxvBMhPgI2e56H67okYbhGafrtOI7tSdoPcaf/BFSBsX8B7tBq7iAkA4kAAAAASUVORK5CYII=" alt="Gmail" title="Gmail" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">Email Us</p>
                                            <a class="h6 " href="/cdn-cgi/l/email-protection#582b37342d2c3137362b183a393b39363b21763b3735"><span class="__cf_email__" data-cfemail="691a06051c1d0006071a290b080a08070a10470a0604">[email protected]</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/call-yellow-icon.webp'); ?>" type="image/webp">
                                                <source srcset="<?php echo asset('images/call-yellow-icon.png'); ?>" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAY1BMVEUAAAD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD////+9Ov2jTT6vor2iSv+9u797N3969v83sT6xpn5uoT5r3D3nE32lED959VL17lWAAAAEXRSTlMAHvN3+eSnubhwV6YgWU7XIs+DM+EAAAC8SURBVCjPdZJZDsMgDETZs3YxIWRPe/9TFgKkFm3ej9GM7JFsSITyQgr2KHlLMLSBk4Z+9TsDBLslvYKMKug1/FAf892cSevO4mk+x+dqxw4I5Rp8HZyxAYYS7svsjB4wnJS+rC7DAKYk0heTN4Ak4qhL3iGiYUf9NmD6bbfJkOHxGnTXd9plpVEFRGfUgRTOIWIXbHDSwolZ50FP4e3OouAPKi4xh9GrtV8d6vq0CapQLg0a/j5CFvwZhQ806x39smsfBAAAAABJRU5ErkJggg==" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAY1BMVEUAAAD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD////+9Ov2jTT6vor2iSv+9u797N3969v83sT6xpn5uoT5r3D3nE32lED959VL17lWAAAAEXRSTlMAHvN3+eSnubhwV6YgWU7XIs+DM+EAAAC8SURBVCjPdZJZDsMgDETZs3YxIWRPe/9TFgKkFm3ej9GM7JFsSITyQgr2KHlLMLSBk4Z+9TsDBLslvYKMKug1/FAf892cSevO4mk+x+dqxw4I5Rp8HZyxAYYS7svsjB4wnJS+rC7DAKYk0heTN4Ak4qhL3iGiYUf9NmD6bbfJkOHxGnTXd9plpVEFRGfUgRTOIWIXbHDSwolZ50FP4e3OouAPKi4xh9GrtV8d6vq0CapQLg0a/j5CFvwZhQ806x39smsfBAAAAABJRU5ErkJggg==" alt="Phone" title="Phone" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">USA</p>
                                            <h4 class="h6 ">
                                                <a href="tel:+13474414161" class>+1 347 441 4161</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/wp-icon.webp'); ?>" type="image/webp">
                                                <source srcset="images/wp-icon.png" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAAGgrv1cAAAAqFBMVEUnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAxsmc0s2k5tW06tW48tnBGundTv4BUv4F1y5mI0qeN1KuO1ayc2rbF6dXW8OHc8uXe8+fq9+/s+PHu+fPv+fP4/Pr///8WddykAAAAIHRSTlMAHh8gISJOV1hZWm9xc3d4paanuLnX4+Ty8/j5+vz9/k+mUl0AAAEPSURBVCjPZZDZVsJAEERvXHBBQQ0agzi5Km7ghqj9/3/mwyQc0HqZXqp6uhqGOwxCtg2oQcUfQbVhbKiQ1GPgogT2VMHvZxW9z89NmLIOoKeqNYB+xK2qZ1Q6i7vcZKQ+xDzyJ7UdCoAz1VQAQDEanw9zyGUmHQA0nWQPTjSW7WTUiJwMUOMzJxXqa0u7QvVr+RlLLUmqrxGh2xSrbWqg38ZN3iZlMx2K0+uOnE6LVbmf3EBzlNm1/1AXsJVUIyKe1jppi1LVt4h4WdeUjFWd/sR8Y9gVVQ5uFvF+7/Tl+fG2NT/oOA+LyGhPlM+dMZ29fcfHyuJ+83fbZr912LvcMHHIGorhqJpMqtFwty38At+EPFjEzQ5QAAAAAElFTkSuQmCC" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAAGgrv1cAAAAqFBMVEUnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAxsmc0s2k5tW06tW48tnBGundTv4BUv4F1y5mI0qeN1KuO1ayc2rbF6dXW8OHc8uXe8+fq9+/s+PHu+fPv+fP4/Pr///8WddykAAAAIHRSTlMAHh8gISJOV1hZWm9xc3d4paanuLnX4+Ty8/j5+vz9/k+mUl0AAAEPSURBVCjPZZDZVsJAEERvXHBBQQ0agzi5Km7ghqj9/3/mwyQc0HqZXqp6uhqGOwxCtg2oQcUfQbVhbKiQ1GPgogT2VMHvZxW9z89NmLIOoKeqNYB+xK2qZ1Q6i7vcZKQ+xDzyJ7UdCoAz1VQAQDEanw9zyGUmHQA0nWQPTjSW7WTUiJwMUOMzJxXqa0u7QvVr+RlLLUmqrxGh2xSrbWqg38ZN3iZlMx2K0+uOnE6LVbmf3EBzlNm1/1AXsJVUIyKe1jppi1LVt4h4WdeUjFWd/sR8Y9gVVQ5uFvF+7/Tl+fG2NT/oOA+LyGhPlM+dMZ29fcfHyuJ+83fbZr912LvcMHHIGorhqJpMqtFwty38At+EPFjEzQ5QAAAAAElFTkSuQmCC" alt="Phone" title="Phone" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">UK</p>
                                            <h4 class="h6 ">
                                                <a href="tel:+4402079938766" class>+44 020 7993 8766</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">about us</a>
                    <ul class="dropdown-menu submenu">
                        <div class="container-fluid submenu-inner">
                            <div class="row">
                                <div class="col-lg-2">
                                    <p class="dropdown-item nav-link font-semibold">Culture</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('agile-mindset') ?>">Agile Mindset</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('kas-pvt-ltd-values') ?>">KAS PVT LTD Values</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('kas-pvt-ltd-culture') ?>">KAS PVT LTD Culture</a>
                                </div>
                                <div class="col-lg-2">
                                    <p class="dropdown-item nav-link font-semibold">About Company</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('about-us">About Us') ?></a>
                                </div>
                                <div class=" col-lg-3 col-xl d-none d-xl-block">
                                        <div class="img-text position-relative banner-post h-100 d-flex align-items-end">
                                            <a href="<?php echo base_url('great-place-to-work') ?>">
                                                <figure class="banner-post-img">
                                                    <picture>
                                                        <source srcset="<?php echo asset('images/cs-img.webp'); ?>" type="image/webp">
                                                        <source srcset="images/cs-img.jpg" type="image/jpeg"><img data-src="https://kasinfotech.com/main-boot-5/images/header/xcs-img.jpg.pagespeed.ic.rnWRlRSD0j.webp" src="images/xcs-img.jpg.pagespeed.ic.rnWRlRSD0j.webp" alt="KAS PVT LTD" title="KAS PVT LTD">
                                                    </picture>
                                                </figure>
                                                <div class="img-text-inner img-text-trans-none w-100 d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <p class="font-bold h5">WE ARE</p>
                                                        <p class="text-dark img-text-heading font-bold">GREAT PLACE TO WORK - CERTIFIED<sup class="text-18">TM</sup></p>
                                                        <p class="text-18">Building and sustaining High-Trust, High-Performance Culture<sup class="text-sm">TM</sup></p>
                                                    </div>
                                                    <picture>
                                                        <source srcset="<?php echo asset('images/gptw.webp'); ?>" type="image/webp">
                                                        <source srcset="images/gptw.png" type="image/jpeg"><img data-src="https://kasinfotech.com/main-boot-5/images/header/xgptw.png,qv-3.pagespeed.ic._V8cEQRcAj.png" src="images/xgptw.png%2Cqv-3.pagespeed.ic._V8cEQRcAj.png" alt="KAS PVT LTD Great Place to Work" title="KAS PVT LTD Great Place to Work">
                                                    </picture>
                                                </div>
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid header-contact">
                            <div class="row g-4 gy-lg-0">
                                <div class="col-md-5 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/skype-icon.webp'); ?>" type="image/webp">
                                                <source srcset="images/skype-icon.png" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAD0UlEQVRIiZ2VW2gcZRTHfzM72ewmmzabxqRubaUq7dqCUIukVh+sShFr3acqUQr1koJP1gsFQdSA1wel+iQilfqg1QhqEbVYoUSrptgNWJuq1UYqSdzNJulms0l2dy5yZmYnmdkNAf9wmPnO933nfs6ncPgSi/AQ8CBwAxAGZPML4DiwBrgSsIAMMAQMsgyqCkLAl8DO5S4E8DtwFHgLmKx3QHW/3/wP4YKNwPPAn8C+pRR0AzuWFKEAugVFA/K6Q7MGGJaz5yAOvAccCl7XgMfrClYVKJswrcMKjesTERJNKiYwXDD4O1eCvAmtGmgK9oYjS3L0xGIFm+taPWdAxeSpW+L0JGNsbG3wHfkpU+LtoQJHfilARHXIUXIAOAl8jpvkMuC/bVowY/D+rg72Xte8ZPQE7/42Q8+JHERVx2sHRTdsFcnBaM2tgsGOZMwTPlkyeaR/gs0fjrC1b4wXfs57Rx9NxtiZjDm5WYBcfAw3yR/UKNAt7kpEvOUb5woc/vRfhjJl0qPz9H6dZc+3OXuvZFpkpisQVoJS9uPmoA94xrdlWVQsy1vuXhvh2LY4Z8fLdl4kHJ8MXCaRK9thz0xVoKXBCe0CJLdrJAf3AR/5Q6Sz5eoo6dRqHzudLXFmoszpXIWB8RJnL85CxQLxVgzyybdxj3iwvobdojE4PMuBHyY5tL3NY9/Y0WhTj7uWSjo4cJnvLhYhUGUurlBZ3C5VKI6SN3+cYlPfKC8N5vl+rMS87jdxW2cj/fd2smVd1OmXWijiwXgNW8pt3oRwiPMXijw7PAcxjc6VGl2rGrgtEWH/phaaNce2F7vi7Lo06oTIb+4Fte5ELBpsaA/zWaqTV3evhkYVFItMQefY+Rme7Btjb/+Ed3xDiwZNmjM+/MiKB2lAaq7d25rWOXhnO6l1UVJAvmTyyvGso0i8U6CtUV04LpUltIjnoidEyh4bHcB2j62bhKIh7l/fZC/vSES4JhFFa1C5ti3MwzfHee2mVi8aL/9a4LRUVHMoqOCq6nuwyvXCgeWUau+tbTy3dWW95Hk4+leR7q/GHeu1mnopVz2YAySod9ts8TSkcPKPIieyZQwZVqpCOKSIc4zMGvSPlehN5+k9NQWaDLtQvT6YDz6ZHwN77D/F9UTKTzq0WSMSUe0UzEpzzejOO7FCE+3BLq7iTFAB7mzqrjkqwqpVIh6K1bUdFMS+mrQDDwBPS/x8XImvxFlILF5e+CngSD0FgtelvGWQAv8sK6oW8uDcLj/1QhSEGNEFJN1ylgE64pIUhdBaeVyAc26I37GFAP8BhwNLM9Tem+MAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAD0UlEQVRIiZ2VW2gcZRTHfzM72ewmmzabxqRubaUq7dqCUIukVh+sShFr3acqUQr1koJP1gsFQdSA1wel+iQilfqg1QhqEbVYoUSrptgNWJuq1UYqSdzNJulms0l2dy5yZmYnmdkNAf9wmPnO933nfs6ncPgSi/AQ8CBwAxAGZPML4DiwBrgSsIAMMAQMsgyqCkLAl8DO5S4E8DtwFHgLmKx3QHW/3/wP4YKNwPPAn8C+pRR0AzuWFKEAugVFA/K6Q7MGGJaz5yAOvAccCl7XgMfrClYVKJswrcMKjesTERJNKiYwXDD4O1eCvAmtGmgK9oYjS3L0xGIFm+taPWdAxeSpW+L0JGNsbG3wHfkpU+LtoQJHfilARHXIUXIAOAl8jpvkMuC/bVowY/D+rg72Xte8ZPQE7/42Q8+JHERVx2sHRTdsFcnBaM2tgsGOZMwTPlkyeaR/gs0fjrC1b4wXfs57Rx9NxtiZjDm5WYBcfAw3yR/UKNAt7kpEvOUb5woc/vRfhjJl0qPz9H6dZc+3OXuvZFpkpisQVoJS9uPmoA94xrdlWVQsy1vuXhvh2LY4Z8fLdl4kHJ8MXCaRK9thz0xVoKXBCe0CJLdrJAf3AR/5Q6Sz5eoo6dRqHzudLXFmoszpXIWB8RJnL85CxQLxVgzyybdxj3iwvobdojE4PMuBHyY5tL3NY9/Y0WhTj7uWSjo4cJnvLhYhUGUurlBZ3C5VKI6SN3+cYlPfKC8N5vl+rMS87jdxW2cj/fd2smVd1OmXWijiwXgNW8pt3oRwiPMXijw7PAcxjc6VGl2rGrgtEWH/phaaNce2F7vi7Lo06oTIb+4Fte5ELBpsaA/zWaqTV3evhkYVFItMQefY+Rme7Btjb/+Ed3xDiwZNmjM+/MiKB2lAaq7d25rWOXhnO6l1UVJAvmTyyvGso0i8U6CtUV04LpUltIjnoidEyh4bHcB2j62bhKIh7l/fZC/vSES4JhFFa1C5ti3MwzfHee2mVi8aL/9a4LRUVHMoqOCq6nuwyvXCgeWUau+tbTy3dWW95Hk4+leR7q/GHeu1mnopVz2YAySod9ts8TSkcPKPIieyZQwZVqpCOKSIc4zMGvSPlehN5+k9NQWaDLtQvT6YDz6ZHwN77D/F9UTKTzq0WSMSUe0UzEpzzejOO7FCE+3BLq7iTFAB7mzqrjkqwqpVIh6K1bUdFMS+mrQDDwBPS/x8XImvxFlILF5e+CngSD0FgtelvGWQAv8sK6oW8uDcLj/1QhSEGNEFJN1ylgE64pIUhdBaeVyAc26I37GFAP8BhwNLM9Tem+MAAAAASUVORK5CYII=" alt="Skype" title="Skype" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">Skype ID </p>
                                            <a class="h6 " href="skype:KAS PVT LTD?call">KAS PVT LTD</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/gmail-icon.webp'); ?>" type="image/webp">
                                                <source srcset="<?php echo asset('images/gmail-icon.png'); ?>" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAASCAYAAABB7B6eAAADbklEQVQ4jZWV3W8UVRjGf+djZj9mu2Vb7BbSGsOFxs/oTaPeEOXGf0CxCQTDhUYjsaRFxSaaQGoVQRDiRxruDfFK8Maod35cafRKo2GxBaTQbj/Y3ZndmZ05Zs5SUlMo9U3Oxbw553me877PeUdc2bH9GdHTeyq3f7TsPvEkCWBqNZCS/xVJgujqIj0V/vIzzWNH5pKrs/vF3PCztfbMdCEJArIv7CW7bwSR7vd9ewgh1gc2xu6RnocBmlOf0To9BY6DMzAQyKBWz2cHBlB9ZZqffkx9zy7af/yOyucR+XyHZD3VuRzK84grFeov7qV54hiyVCJ/9yBBveGqnZt6xqSSGU+CyHvEly8RnjsLrovz6GOITAYThh3A1bcxBtnVhZCS1hdn8N96g+TiDPquPhxHsxwlzM5VGykslyszXO3uQQwOogVWVfD+u9T3vUJ85R9UoWAJbTnSpbXNJfPz1MdG8A+9Y3NaKdTWrcz19nGpMo1JDFIpiVpewi9vIfjwJPH2p1DVeXT/FqIfv6e+e5jmV2eRrosoFOySmQytb76mtut5ou++RZf7UQtV4qHH8Y+fojF4D2phgRTbWkUohV5cJCmVCCY/oDX6OoQhjpuBdow//iaNt8chimx1/InDNA6MYgIfJ+1TENB69TWCoydIenvRi1WE6rhQ36ypUoilJUQYEu7eQ/zwI2SOH0X99iui3E947kuS2VmE1rR/+gFV7kNeu0Z8/4OEI6O0h4aQ8/P2dkh1s196tSms95tNZKVC/MBDBCc/wT09hXPmc3SxSPLXnxhjUN2bENUq0XPDtF56GVPsRl64YEWSy/0Xco31UmYpkRdnoN2mNXqA1uQRTKnH9kpfX8Z4Hs3DkzQPjndApv/unLvFm9FrMqtLtryMqNeJnt5BfO99ZN6bQIQRrYPjxNu2IWc6Iqzy28TtCVZKlvq9UsH0bqZ5aKJjU8dFnj/fAb7DSFmfwD7WzriQi1VIXZWWoXZ9XdUbIkibmYLnUxum1vR91A2bIjY+CG9JkNyYP4VCgVwuZ8miKLJLbVD5Skhj8FYn4ji2IMVikWw2S7vdtoQpWZpfId9g5NNR0TJJ0ilJHFvFKbjW2pKtlEtKaUlWvjcYsTZxvBMhPgI2e56H67okYbhGafrtOI7tSdoPcaf/BFSBsX8B7tBq7iAkA4kAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAASCAYAAABB7B6eAAADbklEQVQ4jZWV3W8UVRjGf+djZj9mu2Vb7BbSGsOFxs/oTaPeEOXGf0CxCQTDhUYjsaRFxSaaQGoVQRDiRxruDfFK8Maod35cafRKo2GxBaTQbj/Y3ZndmZ05Zs5SUlMo9U3Oxbw553me877PeUdc2bH9GdHTeyq3f7TsPvEkCWBqNZCS/xVJgujqIj0V/vIzzWNH5pKrs/vF3PCztfbMdCEJArIv7CW7bwSR7vd9ewgh1gc2xu6RnocBmlOf0To9BY6DMzAQyKBWz2cHBlB9ZZqffkx9zy7af/yOyucR+XyHZD3VuRzK84grFeov7qV54hiyVCJ/9yBBveGqnZt6xqSSGU+CyHvEly8RnjsLrovz6GOITAYThh3A1bcxBtnVhZCS1hdn8N96g+TiDPquPhxHsxwlzM5VGykslyszXO3uQQwOogVWVfD+u9T3vUJ85R9UoWAJbTnSpbXNJfPz1MdG8A+9Y3NaKdTWrcz19nGpMo1JDFIpiVpewi9vIfjwJPH2p1DVeXT/FqIfv6e+e5jmV2eRrosoFOySmQytb76mtut5ou++RZf7UQtV4qHH8Y+fojF4D2phgRTbWkUohV5cJCmVCCY/oDX6OoQhjpuBdow//iaNt8chimx1/InDNA6MYgIfJ+1TENB69TWCoydIenvRi1WE6rhQ36ypUoilJUQYEu7eQ/zwI2SOH0X99iui3E947kuS2VmE1rR/+gFV7kNeu0Z8/4OEI6O0h4aQ8/P2dkh1s196tSms95tNZKVC/MBDBCc/wT09hXPmc3SxSPLXnxhjUN2bENUq0XPDtF56GVPsRl64YEWSy/0Xco31UmYpkRdnoN2mNXqA1uQRTKnH9kpfX8Z4Hs3DkzQPjndApv/unLvFm9FrMqtLtryMqNeJnt5BfO99ZN6bQIQRrYPjxNu2IWc6Iqzy28TtCVZKlvq9UsH0bqZ5aKJjU8dFnj/fAb7DSFmfwD7WzriQi1VIXZWWoXZ9XdUbIkibmYLnUxum1vR91A2bIjY+CG9JkNyYP4VCgVwuZ8miKLJLbVD5Skhj8FYn4ji2IMVikWw2S7vdtoQpWZpfId9g5NNR0TJJ0ilJHFvFKbjW2pKtlEtKaUlWvjcYsTZxvBMhPgI2e56H67okYbhGafrtOI7tSdoPcaf/BFSBsX8B7tBq7iAkA4kAAAAASUVORK5CYII=" alt="Gmail" title="Gmail" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">Email Us</p>
                                            <a class="h6 " href="/cdn-cgi/l/email-protection#9ae9f5f6efeef3f5f4e9daf8fbf9fbf4f9e3b4f9f5f7"><span class="__cf_email__" data-cfemail="5d2e323128293432332e1d3f3c3e3c333e24733e3230">[email protected]</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/call-yellow-icon.webp'); ?>" type="image/webp">
                                                <source srcset="<?php echo asset('images/call-yellow-icon.png'); ?>" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAY1BMVEUAAAD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD////+9Ov2jTT6vor2iSv+9u797N3969v83sT6xpn5uoT5r3D3nE32lED959VL17lWAAAAEXRSTlMAHvN3+eSnubhwV6YgWU7XIs+DM+EAAAC8SURBVCjPdZJZDsMgDETZs3YxIWRPe/9TFgKkFm3ej9GM7JFsSITyQgr2KHlLMLSBk4Z+9TsDBLslvYKMKug1/FAf892cSevO4mk+x+dqxw4I5Rp8HZyxAYYS7svsjB4wnJS+rC7DAKYk0heTN4Ak4qhL3iGiYUf9NmD6bbfJkOHxGnTXd9plpVEFRGfUgRTOIWIXbHDSwolZ50FP4e3OouAPKi4xh9GrtV8d6vq0CapQLg0a/j5CFvwZhQ806x39smsfBAAAAABJRU5ErkJggg==" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAY1BMVEUAAAD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD////+9Ov2jTT6vor2iSv+9u797N3969v83sT6xpn5uoT5r3D3nE32lED959VL17lWAAAAEXRSTlMAHvN3+eSnubhwV6YgWU7XIs+DM+EAAAC8SURBVCjPdZJZDsMgDETZs3YxIWRPe/9TFgKkFm3ej9GM7JFsSITyQgr2KHlLMLSBk4Z+9TsDBLslvYKMKug1/FAf892cSevO4mk+x+dqxw4I5Rp8HZyxAYYS7svsjB4wnJS+rC7DAKYk0heTN4Ak4qhL3iGiYUf9NmD6bbfJkOHxGnTXd9plpVEFRGfUgRTOIWIXbHDSwolZ50FP4e3OouAPKi4xh9GrtV8d6vq0CapQLg0a/j5CFvwZhQ806x39smsfBAAAAABJRU5ErkJggg==" alt="Phone" title="Phone" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">USA</p>
                                            <h4 class="h6 ">
                                                <a href="tel:+13474414161" class>+1 347 441 4161</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/wp-icon.webp'); ?>" type="image/webp">
                                                <source srcset="images/wp-icon.png" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAAGgrv1cAAAAqFBMVEUnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAxsmc0s2k5tW06tW48tnBGundTv4BUv4F1y5mI0qeN1KuO1ayc2rbF6dXW8OHc8uXe8+fq9+/s+PHu+fPv+fP4/Pr///8WddykAAAAIHRSTlMAHh8gISJOV1hZWm9xc3d4paanuLnX4+Ty8/j5+vz9/k+mUl0AAAEPSURBVCjPZZDZVsJAEERvXHBBQQ0agzi5Km7ghqj9/3/mwyQc0HqZXqp6uhqGOwxCtg2oQcUfQbVhbKiQ1GPgogT2VMHvZxW9z89NmLIOoKeqNYB+xK2qZ1Q6i7vcZKQ+xDzyJ7UdCoAz1VQAQDEanw9zyGUmHQA0nWQPTjSW7WTUiJwMUOMzJxXqa0u7QvVr+RlLLUmqrxGh2xSrbWqg38ZN3iZlMx2K0+uOnE6LVbmf3EBzlNm1/1AXsJVUIyKe1jppi1LVt4h4WdeUjFWd/sR8Y9gVVQ5uFvF+7/Tl+fG2NT/oOA+LyGhPlM+dMZ29fcfHyuJ+83fbZr912LvcMHHIGorhqJpMqtFwty38At+EPFjEzQ5QAAAAAElFTkSuQmCC" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAAGgrv1cAAAAqFBMVEUnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAxsmc0s2k5tW06tW48tnBGundTv4BUv4F1y5mI0qeN1KuO1ayc2rbF6dXW8OHc8uXe8+fq9+/s+PHu+fPv+fP4/Pr///8WddykAAAAIHRSTlMAHh8gISJOV1hZWm9xc3d4paanuLnX4+Ty8/j5+vz9/k+mUl0AAAEPSURBVCjPZZDZVsJAEERvXHBBQQ0agzi5Km7ghqj9/3/mwyQc0HqZXqp6uhqGOwxCtg2oQcUfQbVhbKiQ1GPgogT2VMHvZxW9z89NmLIOoKeqNYB+xK2qZ1Q6i7vcZKQ+xDzyJ7UdCoAz1VQAQDEanw9zyGUmHQA0nWQPTjSW7WTUiJwMUOMzJxXqa0u7QvVr+RlLLUmqrxGh2xSrbWqg38ZN3iZlMx2K0+uOnE6LVbmf3EBzlNm1/1AXsJVUIyKe1jppi1LVt4h4WdeUjFWd/sR8Y9gVVQ5uFvF+7/Tl+fG2NT/oOA+LyGhPlM+dMZ29fcfHyuJ+83fbZr912LvcMHHIGorhqJpMqtFwty38At+EPFjEzQ5QAAAAAElFTkSuQmCC" alt="Phone" title="Phone" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">UK</p>
                                            <h4 class="h6 ">
                                                <a href="tel:+4402079938766" class>+44 020 7993 8766</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">technology</a>
                    <ul class="dropdown-menu submenu">
                        <div class="container-fluid submenu-inner">
                            <div class="row">
                                <div class="col-lg-3 col-xl">
                                    <p class="dropdown-item nav-link font-semibold">Front End</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('angular-js-development') ?>">Angular</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-reactjs-developer') ?>">Reactjs</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-vuejs-developer') ?>">Vue.js</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('ui-ux-enhancement-service') ?>">UI/UX</a>
                                    <p class="dropdown-item nav-link font-semibold">Platforms</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-microsoft-dynamics-365-developer') ?>">MS Dynamics</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-salesforce-developer') ?>">Salesforce</a>
                                </div>
                                <div class="col-lg-3 col-xl">
                                    <p class="dropdown-item nav-link font-semibold">Back End</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('ruby-on-rails-development') ?>">Ruby on Rails</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-node-developer') ?>">Node.js</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-golang-developer') ?>">Golang</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-laravel-developer') ?>">Laravel</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-dot-net-developer') ?>">.NET</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-spring-boot-developer') ?>">Java </a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-python-developer') ?>">Python</a>
                                </div>
                                <div class="col-lg-3 col-xl">
                                    <p class="dropdown-item nav-link font-semibold">Mobile</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-react-native-developer') ?>">React Native</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-flutter-developer') ?>">Flutter</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('android-application-development') ?>">Android</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('mobile-app-development') ?>">iOS</a>
                                    <p class="dropdown-item nav-link font-semibold">Cloud</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('aws-cloud-consulting-services') ?>">AWS</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('hire-devops-developers') ?>">DevOps</a>
                                </div>
                                <div class="col-lg-3 col-xl">
                                    <p class="dropdown-item nav-link font-semibold">QA</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('automation-testing-services') ?>">Automation Testing</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('quality-assurance-testing-services') ?>">Software Testing </a>
                                </div>
                                <div class="col-lg-3 col-xl-5 d-none d-xl-block">
                                    <div class="img-text position-relative banner-post h-100 d-flex align-items-end">
                                        <figure class="banner-post-img">
                                            <picture>
                                                <source srcset="<?php echo asset('images/banner.webp'); ?>" type="image/webp">
                                                <source srcset="images/banner.jpg" type="image/jpeg"><img data-src="https://kasinfotech.com/main-boot-5/images/header/xbanner.jpg.pagespeed.ic.TStxzDJ7vj.webp" src="images/xbanner.jpg.pagespeed.ic.TStxzDJ7vj.webp" alt="KAS PVT LTD" title="KAS PVT LTD">
                                            </picture>
                                        </figure>
                                        <div class="img-text-inner img-text-trans-none">
                                            <p class="text-dark img-text-heading font-bold">World-class expertise,<b class="d-lg-block">Delivered</b></p>
                                            <a href="<?php echo base_url('get-quote') ?>" class="text-uppercase text-primary">get quote<span class="long-arrow-icon-css icon-item right mt-0"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-lg">
                                    <a href="<?php echo base_url('technologies') ?>" class="btn btn-primary text-uppercase ls-xs">Explore All</a>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid header-contact">
                            <div class="row g-4 gy-lg-0">
                                <div class="col-md-5 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/skype-icon.webp'); ?>" type="image/webp">
                                                <source srcset="images/skype-icon.png" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAD0UlEQVRIiZ2VW2gcZRTHfzM72ewmmzabxqRubaUq7dqCUIukVh+sShFr3acqUQr1koJP1gsFQdSA1wel+iQilfqg1QhqEbVYoUSrptgNWJuq1UYqSdzNJulms0l2dy5yZmYnmdkNAf9wmPnO933nfs6ncPgSi/AQ8CBwAxAGZPML4DiwBrgSsIAMMAQMsgyqCkLAl8DO5S4E8DtwFHgLmKx3QHW/3/wP4YKNwPPAn8C+pRR0AzuWFKEAugVFA/K6Q7MGGJaz5yAOvAccCl7XgMfrClYVKJswrcMKjesTERJNKiYwXDD4O1eCvAmtGmgK9oYjS3L0xGIFm+taPWdAxeSpW+L0JGNsbG3wHfkpU+LtoQJHfilARHXIUXIAOAl8jpvkMuC/bVowY/D+rg72Xte8ZPQE7/42Q8+JHERVx2sHRTdsFcnBaM2tgsGOZMwTPlkyeaR/gs0fjrC1b4wXfs57Rx9NxtiZjDm5WYBcfAw3yR/UKNAt7kpEvOUb5woc/vRfhjJl0qPz9H6dZc+3OXuvZFpkpisQVoJS9uPmoA94xrdlWVQsy1vuXhvh2LY4Z8fLdl4kHJ8MXCaRK9thz0xVoKXBCe0CJLdrJAf3AR/5Q6Sz5eoo6dRqHzudLXFmoszpXIWB8RJnL85CxQLxVgzyybdxj3iwvobdojE4PMuBHyY5tL3NY9/Y0WhTj7uWSjo4cJnvLhYhUGUurlBZ3C5VKI6SN3+cYlPfKC8N5vl+rMS87jdxW2cj/fd2smVd1OmXWijiwXgNW8pt3oRwiPMXijw7PAcxjc6VGl2rGrgtEWH/phaaNce2F7vi7Lo06oTIb+4Fte5ELBpsaA/zWaqTV3evhkYVFItMQefY+Rme7Btjb/+Ed3xDiwZNmjM+/MiKB2lAaq7d25rWOXhnO6l1UVJAvmTyyvGso0i8U6CtUV04LpUltIjnoidEyh4bHcB2j62bhKIh7l/fZC/vSES4JhFFa1C5ti3MwzfHee2mVi8aL/9a4LRUVHMoqOCq6nuwyvXCgeWUau+tbTy3dWW95Hk4+leR7q/GHeu1mnopVz2YAySod9ts8TSkcPKPIieyZQwZVqpCOKSIc4zMGvSPlehN5+k9NQWaDLtQvT6YDz6ZHwN77D/F9UTKTzq0WSMSUe0UzEpzzejOO7FCE+3BLq7iTFAB7mzqrjkqwqpVIh6K1bUdFMS+mrQDDwBPS/x8XImvxFlILF5e+CngSD0FgtelvGWQAv8sK6oW8uDcLj/1QhSEGNEFJN1ylgE64pIUhdBaeVyAc26I37GFAP8BhwNLM9Tem+MAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAD0UlEQVRIiZ2VW2gcZRTHfzM72ewmmzabxqRubaUq7dqCUIukVh+sShFr3acqUQr1koJP1gsFQdSA1wel+iQilfqg1QhqEbVYoUSrptgNWJuq1UYqSdzNJulms0l2dy5yZmYnmdkNAf9wmPnO933nfs6ncPgSi/AQ8CBwAxAGZPML4DiwBrgSsIAMMAQMsgyqCkLAl8DO5S4E8DtwFHgLmKx3QHW/3/wP4YKNwPPAn8C+pRR0AzuWFKEAugVFA/K6Q7MGGJaz5yAOvAccCl7XgMfrClYVKJswrcMKjesTERJNKiYwXDD4O1eCvAmtGmgK9oYjS3L0xGIFm+taPWdAxeSpW+L0JGNsbG3wHfkpU+LtoQJHfilARHXIUXIAOAl8jpvkMuC/bVowY/D+rg72Xte8ZPQE7/42Q8+JHERVx2sHRTdsFcnBaM2tgsGOZMwTPlkyeaR/gs0fjrC1b4wXfs57Rx9NxtiZjDm5WYBcfAw3yR/UKNAt7kpEvOUb5woc/vRfhjJl0qPz9H6dZc+3OXuvZFpkpisQVoJS9uPmoA94xrdlWVQsy1vuXhvh2LY4Z8fLdl4kHJ8MXCaRK9thz0xVoKXBCe0CJLdrJAf3AR/5Q6Sz5eoo6dRqHzudLXFmoszpXIWB8RJnL85CxQLxVgzyybdxj3iwvobdojE4PMuBHyY5tL3NY9/Y0WhTj7uWSjo4cJnvLhYhUGUurlBZ3C5VKI6SN3+cYlPfKC8N5vl+rMS87jdxW2cj/fd2smVd1OmXWijiwXgNW8pt3oRwiPMXijw7PAcxjc6VGl2rGrgtEWH/phaaNce2F7vi7Lo06oTIb+4Fte5ELBpsaA/zWaqTV3evhkYVFItMQefY+Rme7Btjb/+Ed3xDiwZNmjM+/MiKB2lAaq7d25rWOXhnO6l1UVJAvmTyyvGso0i8U6CtUV04LpUltIjnoidEyh4bHcB2j62bhKIh7l/fZC/vSES4JhFFa1C5ti3MwzfHee2mVi8aL/9a4LRUVHMoqOCq6nuwyvXCgeWUau+tbTy3dWW95Hk4+leR7q/GHeu1mnopVz2YAySod9ts8TSkcPKPIieyZQwZVqpCOKSIc4zMGvSPlehN5+k9NQWaDLtQvT6YDz6ZHwN77D/F9UTKTzq0WSMSUe0UzEpzzejOO7FCE+3BLq7iTFAB7mzqrjkqwqpVIh6K1bUdFMS+mrQDDwBPS/x8XImvxFlILF5e+CngSD0FgtelvGWQAv8sK6oW8uDcLj/1QhSEGNEFJN1ylgE64pIUhdBaeVyAc26I37GFAP8BhwNLM9Tem+MAAAAASUVORK5CYII=" alt="Skype" title="Skype" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">Skype ID </p>
                                            <a class="h6 " href="skype:KAS PVT LTD?call">KAS PVT LTD</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/gmail-icon.webp'); ?>" type="image/webp">
                                                <source srcset="<?php echo asset('images/gmail-icon.png'); ?>" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAASCAYAAABB7B6eAAADbklEQVQ4jZWV3W8UVRjGf+djZj9mu2Vb7BbSGsOFxs/oTaPeEOXGf0CxCQTDhUYjsaRFxSaaQGoVQRDiRxruDfFK8Maod35cafRKo2GxBaTQbj/Y3ZndmZ05Zs5SUlMo9U3Oxbw553me877PeUdc2bH9GdHTeyq3f7TsPvEkCWBqNZCS/xVJgujqIj0V/vIzzWNH5pKrs/vF3PCztfbMdCEJArIv7CW7bwSR7vd9ewgh1gc2xu6RnocBmlOf0To9BY6DMzAQyKBWz2cHBlB9ZZqffkx9zy7af/yOyucR+XyHZD3VuRzK84grFeov7qV54hiyVCJ/9yBBveGqnZt6xqSSGU+CyHvEly8Rnj rovz6GOITAYThh3A1bcxBtnVhZCS1hdn8N96g+TiDPquPhxHsxwlzM5VGykslyszXO3uQQwOogVWVfD+u9T3vUJ85R9UoWAJbTnSpbXNJfPz1MdG8A+9Y3NaKdTWrcz19nGpMo1JDFIpiVpewi9vIfjwJPH2p1DVeXT/FqIfv6e+e5jmV2eRrosoFOySmQytb76mtut5ou++RZf7UQtV4qHH8Y+fojF4D2phgRTbWkUohV5cJCmVCCY/oDX6OoQhjpuBdow//iaNt8chimx1/InDNA6MYgIfJ+1TENB69TWCoydIenvRi1WE6rhQ36ypUoilJUQYEu7eQ/zwI2SOH0X99iui3E947kuS2VmE1rR/+gFV7kNeu0Z8/4OEI6O0h4aQ8/P2dkh1s196tSms95tNZKVC/MBDBCc/wT09hXPmc3SxSPLXnxhjUN2bENUq0XPDtF56GVPsRl64YEWSy/0Xco31UmYpkRdnoN2mNXqA1uQRTKnH9kpfX8Z4Hs3DkzQPjndApv/unLvFm9FrMqtLtryMqNeJnt5BfO99ZN6bQIQRrYPjxNu2IWc6Iqzy28TtCVZKlvq9UsH0bqZ5aKJjU8dFnj/fAb7DSFmfwD7WzriQi1VIXZWWoXZ9XdUbIkibmYLnUxum1vR91A2bIjY+CG9JkNyYP4VCgVwuZ8miKLJLbVD5Skhj8FYn4ji2IMVikWw2S7vdtoQpWZpfId9g5NNR0TJJ0ilJHFvFKbjW2pKtlEtKaUlWvjcYsTZxvBMhPgI2e56H67okYbhGafrtOI7tSdoPcaf/BFSBsX8B7tBq7iAkA4kAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAASCAYAAABB7B6eAAADbklEQVQ4jZWV3W8UVRjGf+djZj9mu2Vb7BbSGsOFxs/oTaPeEOXGf0CxCQTDhUYjsaRFxSaaQGoVQRDiRxruDfFK8Maod35cafRKo2GxBaTQbj/Y3ZndmZ05Zs5SUlMo9U3Oxbw553me877PeUdc2bH9GdHTeyq3f7TsPvEkCWBqNZCS/xVJgujqIj0V/vIzzWNH5pKrs/vF3PCztfbMdCEJArIv7CW7bwSR7vd9ewgh1gc2xu6RnocBmlOf0To9BY6DMzAQyKBWz2cHBlB9ZZqffkx9zy7af/yOyucR+XyHZD3VuRzK84grFeov7qV54hiyVCJ/9yBBveGqnZt6xqSSGU+CyHvEly8RnjsLrovz6GOITAYThh3A1bcxBtnVhZCS1hdn8N96g+TiDPquPhxHsxwlzM5VGykslyszXO3uQQwOogVWVfD+u9T3vUJ85R9UoWAJbTnSpbXNJfPz1MdG8A+9Y3NaKdTWrcz19nGpMo1JDFIpiVpewi9vIfjwJPH2p1DVeXT/FqIfv6e+e5jmV2eRrosoFOySmQytb76mtut5ou++RZf7UQtV4qHH8Y+fojF4D2phgRTbWkUohV5cJCmVCCY/oDX6OoQhjpuBdow//iaNt8chimx1/InDNA6MYgIfJ+1TENB69TWCoydIenvRi1WE6rhQ36ypUoilJUQYEu7eQ/zwI2SOH0X99iui3E947kuS2VmE1rR/+gFV7kNeu0Z8/4OEI6O0h4aQ8/P2dkh1s196tSms95tNZKVC/MBDBCc/wT09hXPmc3SxSPLXnxhjUN2bENUq0XPDtF56GVPsRl64YEWSy/0Xco31UmYpkRdnoN2mNXqA1uQRTKnH9kpfX8Z4Hs3DkzQPjndApv/unLvFm9FrMqtLtryMqNeJnt5BfO99ZN6bQIQRrYPjxNu2IWc6Iqzy28TtCVZKlvq9UsH0bqZ5aKJjU8dFnj/fAb7DSFmfwD7WzriQi1VIXZWWoXZ9XdUbIkibmYLnUxum1vR91A2bIjY+CG9JkNyYP4VCgVwuZ8miKLJLbVD5Skhj8FYn4ji2IMVikWw2S7vdtoQpWZpfId9g5NNR0TJJ0ilJHFvFKbjW2pKtlEtKaUlWvjcYsTZxvBMhPgI2e56H67okYbhGafrtOI7tSdoPcaf/BFSBsX8B7tBq7iAkA4kAAAAASUVORK5CYII=" alt="Gmail" title="Gmail" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">Email Us</p>
                                            <a class="h6 " href="/cdn-cgi/l/email-protection#4e3d21223b3a2721203d0e2c2f2d2f202d37602d2123"><span class="__cf_email__" data-cfemail="95e6faf9e0e1fcfafbe6d5f7f4f6f4fbf6ecbbf6faf8">[email protected]</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/call-yellow-icon.webp'); ?>" type="image/webp">
                                                <source srcset="<?php echo asset('images/call-yellow-icon.png'); ?>" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAY1BMVEUAAAD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD////+9Ov2jTT6vor2iSv+9u797N3969v83sT6xpn5uoT5r3D3nE32lED959VL17lWAAAAEXRSTlMAHvN3+eSnubhwV6YgWU7XIs+DM+EAAAC8SURBVCjPdZJZDsMgDETZs3YxIWRPe/9TFgKkFm3ej9GM7JFsSITyQgr2KHlLMLSBk4Z+9TsDBLslvYKMKug1/FAf892cSevO4mk+x+dqxw4I5Rp8HZyxAYYS7svsjB4wnJS+rC7DAKYk0heTN4Ak4qhL3iGiYUf9NmD6bbfJkOHxGnTXd9plpVEFRGfUgRTOIWIXbHDSwolZ50FP4e3OouAPKi4xh9GrtV8d6vq0CapQLg0a/j5CFvwZhQ806x39smsfBAAAAABJRU5ErkJggg==" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAY1BMVEUAAAD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD////+9Ov2jTT6vor2iSv+9u797N3969v83sT6xpn5uoT5r3D3nE32lED959VL17lWAAAAEXRSTlMAHvN3+eSnubhwV6YgWU7XIs+DM+EAAAC8SURBVCjPdZJZDsMgDETZs3YxIWRPe/9TFgKkFm3ej9GM7JFsSITyQgr2KHlLMLSBk4Z+9TsDBLslvYKMKug1/FAf892cSevO4mk+x+dqxw4I5Rp8HZyxAYYS7svsjB4wnJS+rC7DAKYk0heTN4Ak4qhL3iGiYUf9NmD6bbfJkOHxGnTXd9plpVEFRGfUgRTOIWIXbHDSwolZ50FP4e3OouAPKi4xh9GrtV8d6vq0CapQLg0a/j5CFvwZhQ806x39smsfBAAAAABJRU5ErkJggg==" alt="Phone" title="Phone" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">USA</p>
                                            <h4 class="h6 ">
                                                <a href="tel:+13474414161" class>+1 347 441 4161</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/wp-icon.webp'); ?>" type="image/webp">
                                                <source srcset="images/wp-icon.png" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAAGgrv1cAAAAqFBMVEUnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAxsmc0s2k5tW06tW48tnBGundTv4BUv4F1y5mI0qeN1KuO1ayc2rbF6dXW8OHc8uXe8+fq9+/s+PHu+fPv+fP4/Pr///8WddykAAAAIHRSTlMAHh8gISJOV1hZWm9xc3d4paanuLnX4+Ty8/j5+vz9/k+mUl0AAAEPSURBVCjPZZDZVsJAEERvXHBBQQ0agzi5Km7ghqj9/3/mwyQc0HqZXqp6uhqGOwxCtg2oQcUfQbVhbKiQ1GPgogT2VMHvZxW9z89NmLIOoKeqNYB+xK2qZ1Q6i7vcZKQ+xDzyJ7UdCoAz1VQAQDEanw9zyGUmHQA0nWQPTjSW7WTUiJwMUOMzJxXqa0u7QvVr+RlLLUmqrxGh2xSrbWqg38ZN3iZlMx2K0+uOnE6LVbmf3EBzlNm1/1AXsJVUIyKe1jppi1LVt4h4WdeUjFWd/sR8Y9gVVQ5uFvF+7/Tl+fG2NT/oOA+LyGhPlM+dMZ29fcfHyuJ+83fbZr912LvcMHHIGorhqJpMqtFwty38At+EPFjEzQ5QAAAAAElFTkSuQmCC" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAAGgrv1cAAAAqFBMVEUnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAxsmc0s2k5tW06tW48tnBGundTv4BUv4F1y5mI0qeN1KuO1ayc2rbF6dXW8OHc8uXe8+fq9+/s+PHu+fPv+fP4/Pr///8WddykAAAAIHRSTlMAHh8gISJOV1hZWm9xc3d4paanuLnX4+Ty8/j5+vz9/k+mUl0AAAEPSURBVCjPZZDZVsJAEERvXHBBQQ0agzi5Km7ghqj9/3/mwyQc0HqZXqp6uhqGOwxCtg2oQcUfQbVhbKiQ1GPgogT2VMHvZxW9z89NmLIOoKeqNYB+xK2qZ1Q6i7vcZKQ+xDzyJ7UdCoAz1VQAQDEanw9zyGUmHQA0nWQPTjSW7WTUiJwMUOMzJxXqa0u7QvVr+RlLLUmqrxGh2xSrbWqg38ZN3iZlMx2K0+uOnE6LVbmf3EBzlNm1/1AXsJVUIyKe1jppi1LVt4h4WdeUjFWd/sR8Y9gVVQ5uFvF+7/Tl+fG2NT/oOA+LyGhPlM+dMZ29fcfHyuJ+83fbZr912LvcMHHIGorhqJpMqtFwty38At+EPFjEzQ5QAAAAAElFTkSuQmCC" alt="Phone" title="Phone" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">UK</p>
                                            <h4 class="h6 ">
                                                <a href="tel:+4402079938766" class>+44 020 7993 8766</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PRODUCTS</a>
                    <ul class="dropdown-menu submenu">
                        <div class="container-fluid submenu-inner">
                            <div class="row">
                                <div class="col-lg-3">
                                    <p class="dropdown-item nav-link font-semibold">EV Products</p>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('battery-management-system') ?>">Battery Management System</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('motor-controller') ?>">Motor Controller</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('ccs2-controller') ?>">CCS2 Controller</a>
                                    <a href="<?php echo base_url('products') ?>" class="btn btn-primary text-uppercase ls-xs">Explore All</a>
                                </div>
                                <div class="col-lg-3">
                                    <p class="dropdown-item nav-link font-semibold opacity-0">0</p>

                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('dc-fast-charger') ?>">DC Fast Charger</a>
                                    <a class="dropdown-item nav-link p text-secondary" href="<?php echo base_url('ac-charge-controller') ?>">AC Charge Controller</a>

                                </div>
                                <div class="col-lg-6">
                                    <div class="img-text position-relative h-100">
                                        <picture>
                                            <source srcset="images/system-bg.webp" type="image/webp">
                                            <source srcset="images/system-bg.jpg" type="image/jpeg"><img data-src="https://kasinfotech.com/main-boot-5/images/header/xsystem-bg.jpg.pagespeed.ic.Ws3yXqkA8x.webp" src="images/xsystem-bg.jpg.pagespeed.ic.Ws3yXqkA8x.webp" alt="KAS PVT LTD" title="KAS PVT LTD" class="ob-cover">
                                        </picture>
                                        <div class="img-text-inner">
                                            <p class="text-dark img-text-heading font-bold">Let’s grow together <b class="d-lg-block">Partner with us</b></p>
                                            <a href="<?php echo base_url('get-quote') ?>" class="text-uppercase text-primary">get quote<span class="long-arrow-icon-css icon-item right mt-0"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid header-contact">
                            <div class="row g-4 gy-lg-0">
                                <div class="col-md-5 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/skype-icon.webp'); ?>" type="image/webp">
                                                <source srcset="images/skype-icon.png" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAD0UlEQVRIiZ2VW2gcZRTHfzM72ewmmzabxqRubaUq7dqCUIukVh+sShFr3acqUQr1koJP1gsFQdSA1wel+iQilfqg1QhqEbVYoUSrptgNWJuq1UYqSdzNJulms0l2dy5yZmYnmdkNAf9wmPnO933nfs6ncPgSi/AQ8CBwAxAGZPML4DiwBrgSsIAMMAQMsgyqCkLAl8DO5S4E8DtwFHgLmKx3QHW/3/wP4YKNwPPAn8C+pRR0AzuWFKEAugVFA/K6Q7MGGJaz5yAOvAccCl7XgMfrClYVKJswrcMKjesTERJNKiYwXDD4O1eCvAmtGmgK9oYjS3L0xGIFm+taPWdAxeSpW+L0JGNsbG3wHfkpU+LtoQJHfilARHXIUXIAOAl8jpvkMuC/bVowY/D+rg72Xte8ZPQE7/42Q8+JHERVx2sHRTdsFcnBaM2tgsGOZMwTPlkyeaR/gs0fjrC1b4wXfs57Rx9NxtiZjDm5WYBcfAw3yR/UKNAt7kpEvOUb5woc/vRfhjJl0qPz9H6dZc+3OXuvZFpkpisQVoJS9uPmoA94xrdlWVQsy1vuXhvh2LY4Z8fLdl4kHJ8MXCaRK9thz0xVoKXBCe0CJLdrJAf3AR/5Q6Sz5eoo6dRqHzudLXFmoszpXIWB8RJnL85CxQLxVgzyybdxj3iwvobdojE4PMuBHyY5tL3NY9/Y0WhTj7uWSjo4cJnvLhYhUGUurlBZ3C5VKI6SN3+cYlPfKC8N5vl+rMS87jdxW2cj/fd2smVd1OmXWijiwXgNW8pt3oRwiPMXijw7PAcxjc6VGl2rGrgtEWH/phaaNce2F7vi7Lo06oTIb+4Fte5ELBpsaA/zWaqTV3evhkYVFItMQefY+Rme7Btjb/+Ed3xDiwZNmjM+/MiKB2lAaq7d25rWOXhnO6l1UVJAvmTyyvGso0i8U6CtUV04LpUltIjnoidEyh4bHcB2j62bhKIh7l/fZC/vSES4JhFFa1C5ti3MwzfHee2mVi8aL/9a4LRUVHMoqOCq6nuwyvXCgeWUau+tbTy3dWW95Hk4+leR7q/GHeu1mnopVz2YAySod9ts8TSkcPKPIieyZQwZVqpCOKSIc4zMGvSPlehN5+k9NQWaDLtQvT6YDz6ZHwN77D/F9UTKTzq0WSMSUe0UzEpzzejOO7FCE+3BLq7iTFAB7mzqrjkqwqpVIh6K1bUdFMS+mrQDDwBPS/x8XImvxFlILF5e+CngSD0FgtelvGWQAv8sK6oW8uDcLj/1QhSEGNEFJN1ylgE64pIUhdBaeVyAc26I37GFAP8BhwNLM9Tem+MAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAD0UlEQVRIiZ2VW2gcZRTHfzM72ewmmzabxqRubaUq7dqCUIukVh+sShFr3acqUQr1koJP1gsFQdSA1wel+iQilfqg1QhqEbVYoUSrptgNWJuq1UYqSdzNJulms0l2dy5yZmYnmdkNAf9wmPnO933nfs6ncPgSi/AQ8CBwAxAGZPML4DiwBrgSsIAMMAQMsgyqCkLAl8DO5S4E8DtwFHgLmKx3QHW/3/wP4YKNwPPAn8C+pRR0AzuWFKEAugVFA/K6Q7MGGJaz5yAOvAccCl7XgMfrClYVKJswrcMKjesTERJNKiYwXDD4O1eCvAmtGmgK9oYjS3L0xGIFm+taPWdAxeSpW+L0JGNsbG3wHfkpU+LtoQJHfilARHXIUXIAOAl8jpvkMuC/bVowY/D+rg72Xte8ZPQE7/42Q8+JHERVx2sHRTdsFcnBaM2tgsGOZMwTPlkyeaR/gs0fjrC1b4wXfs57Rx9NxtiZjDm5WYBcfAw3yR/UKNAt7kpEvOUb5woc/vRfhjJl0qPz9H6dZc+3OXuvZFpkpisQVoJS9uPmoA94xrdlWVQsy1vuXhvh2LY4Z8fLdl4kHJ8MXCaRK9thz0xVoKXBCe0CJLdrJAf3AR/5Q6Sz5eoo6dRqHzudLXFmoszpXIWB8RJnL85CxQLxVgzyybdxj3iwvobdojE4PMuBHyY5tL3NY9/Y0WhTj7uWSjo4cJnvLhYhUGUurlBZ3C5VKI6SN3+cYlPfKC8N5vl+rMS87jdxW2cj/fd2smVd1OmXWijiwXgNW8pt3oRwiPMXijw7PAcxjc6VGl2rGrgtEWH/phaaNce2F7vi7Lo06oTIb+4Fte5ELBpsaA/zWaqTV3evhkYVFItMQefY+Rme7Btjb/+Ed3xDiwZNmjM+/MiKB2lAaq7d25rWOXhnO6l1UVJAvmTyyvGso0i8U6CtUV04LpUltIjnoidEyh4bHcB2j62bhKIh7l/fZC/vSES4JhFFa1C5ti3MwzfHee2mVi8aL/9a4LRUVHMoqOCq6nuwyvXCgeWUau+tbTy3dWW95Hk4+leR7q/GHeu1mnopVz2YAySod9ts8TSkcPKPIieyZQwZVqpCOKSIc4zMGvSPlehN5+k9NQWaDLtQvT6YDz6ZHwN77D/F9UTKTzq0WSMSUe0UzEpzzejOO7FCE+3BLq7iTFAB7mzqrjkqwqpVIh6K1bUdFMS+mrQDDwBPS/x8XImvxFlILF5e+CngSD0FgtelvGWQAv8sK6oW8uDcLj/1QhSEGNEFJN1ylgE64pIUhdBaeVyAc26I37GFAP8BhwNLM9Tem+MAAAAASUVORK5CYII=" alt="Skype" title="Skype" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">Skype ID </p>
                                            <a class="h6 " href="skype:KAS PVT LTD?call">KAS PVT LTD</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/gmail-icon.webp'); ?>" type="image/webp">
                                                <source srcset="<?php echo asset('images/gmail-icon.png'); ?>" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAASCAYAAABB7B6eAAADbklEQVQ4jZWV3W8UVRjGf+djZj9mu2Vb7BbSGsOFxs/oTaPeEOXGf0CxCQTDhUYjsaRFxSaaQGoVQRDiRxruDfFK8Maod35cafRKo2GxBaTQbj/Y3ZndmZ05Zs5SUlMo9U3Oxbw553me877PeUdc2bH9GdHTeyq3f7TsPvEkCWBqNZCS/xVJgujqIj0V/vIzzWNH5pKrs/vF3PCztfbMdCEJArIv7CW7bwSR7vd9ewgh1gc2xu6RnocBmlOf0To9BY6DMzAQyKBWz2cHBlB9ZZqffkx9zy7af/yOyucR+XyHZD3VuRzK84grFeov7qV54hiyVCJ/9yBBveGqnZt6xqSSGU+CyHvEly8RnjsLrovz6GOITAYThh3A1bcxBtnVhZCS1hdn8N96g+TiDPquPhxHsxwlzM5VGykslyszXO3uQQwOogVWVfD+u9T3vUJ85R9UoWAJbTnSpbXNJfPz1MdG8A+9Y3NaKdTWrcz19nGpMo1JDFIpiVpewi9vIfjwJPH2p1DVeXT/FqIfv6e+e5jmV2eRrosoFOySmQytb76mtut5ou++RZf7UQtV4qHH8Y+fojF4D2phgRTbWkUohV5cJCmVCCY/oDX6OoQhjpuBdow//iaNt8chimx1/InDNA6MYgIfJ+1TENB69TWCoydIenvRi1WE6rhQ36ypUoilJUQYEu7eQ/zwI2SOH0X99iui3E947kuS2VmE1rR/+gFV7kNeu0Z8/4OEI6O0h4aQ8/P2dkh1s196tSms95tNZKVC/MBDBCc/wT09hXPmc3SxSPLXnxhjUN2bENUq0XPDtF56GVPsRl64YEWSy/0Xco31UmYpkRdnoN2mNXqA1uQRTKnH9kpfX8Z4Hs3DkzQPjndApv/unLvFm9FrMqtLtryMqNeJnt5BfO99ZN6bQIQRrYPjxNu2IWc6Iqzy28TtCVZKlvq9UsH0bqZ5aKJjU8dFnj/fAb7DSFmfwD7WzriQi1VIXZWWoXZ9XdUbIkibmYLnUxum1vR91A2bIjY+CG9JkNyYP4VCgVwuZ8miKLJLbVD5Skhj8FYn4ji2IMVikWw2S7vdtoQpWZpfId9g5NNR0TJJ0ilJHFvFKbjW2pKtlEtKaUlWvjcYsTZxvBMhPgI2e56H67okYbhGafrtOI7tSdoPcaf/BFSBsX8B7tBq7iAkA4kAAAAASUVORK5CYII=" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAASCAYAAABB7B6eAAADbklEQVQ4jZWV3W8UVRjGf+djZj9mu2Vb7BbSGsOFxs/oTaPeEOXGf0CxCQTDhUYjsaRFxSaaQGoVQRDiRxruDfFK8Maod35cafRKo2GxBaTQbj/Y3ZndmZ05Zs5SUlMo9U3Oxbw553me877PeUdc2bH9GdHTeyq3f7TsPvEkCWBqNZCS/xVJgujqIj0V/vIzzWNH5pKrs/vF3PCztfbMdCEJArIv7CW7bwSR7vd9ewgh1gc2xu6RnocBmlOf0To9BY6DMzAQyKBWz2cHBlB9ZZqffkx9zy7af/yOyucR+XyHZD3VuRzK84grFeov7qV54hiyVCJ/9yBBveGqnZt6xqSSGU+CyHvEly8RnjsLrovz6GOITAYThh3A1bcxBtnVhZCS1hdn8N96g+TiDPquPhxHsxwlzM5VGykslyszXO3uQQwOogVWVfD+u9T3vUJ85R9UoWAJbTnSpbXNJfPz1MdG8A+9Y3NaKdTWrcz19nGpMo1JDFIpiVpewi9vIfjwJPH2p1DVeXT/FqIfv6e+e5jmV2eRrosoFOySmQytb76mtut5ou++RZf7UQtV4qHH8Y+fojF4D2phgRTbWkUohV5cJCmVCCY/oDX6OoQhjpuBdow//iaNt8chimx1/InDNA6MYgIfJ+1TENB69TWCoydIenvRi1WE6rhQ36ypUoilJUQYEu7eQ/zwI2SOH0X99iui3E947kuS2VmE1rR/+gFV7kNeu0Z8/4OEI6O0h4aQ8/P2dkh1s196tSms95tNZKVC/MBDBCc/wT09hXPmc3SxSPLXnxhjUN2bENUq0XPDtF56GVPsRl64YEWSy/0Xco31UmYpkRdnoN2mNXqA1uQRTKnH9kpfX8Z4Hs3DkzQPjndApv/unLvFm9FrMqtLtryMqNeJnt5BfO99ZN6bQIQRrYPjxNu2IWc6Iqzy28TtCVZKlvq9UsH0bqZ5aKJjU8dFnj/fAb7DSFmfwD7WzriQi1VIXZWWoXZ9XdUbIkibmYLnUxum1vR91A2bIjY+CG9JkNyYP4VCgVwuZ8miKLJLbVD5Skhj8FYn4ji2IMVikWw2S7vdtoQpWZpfId9g5NNR0TJJ0ilJHFvFKbjW2pKtlEtKaUlWvjcYsTZxvBMhPgI2e56H67okYbhGafrtOI7tSdoPcaf/BFSBsX8B7tBq7iAkA4kAAAAASUVORK5CYII=" alt="Gmail" title="Gmail" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">Email Us</p>
                                            <a class="h6 " href="/cdn-cgi/l/email-protection#05766a6970716c6a6b7645676466646b667c2b666a68"><span class="__cf_email__" data-cfemail="65160a0910110c0a0b1625070406040b061c4b060a08">[email protected]</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/call-yellow-icon.webp'); ?>" type="image/webp">
                                                <source srcset="<?php echo asset('images/call-yellow-icon.png'); ?>" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAY1BMVEUAAAD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD////+9Ov2jTT6vor2iSv+9u797N3969v83sT6xpn5uoT5r3D3nE32lED959VL17lWAAAAEXRSTlMAHvN3+eSnubhwV6YgWU7XIs+DM+EAAAC8SURBVCjPdZJZDsMgDETZs3YxIWRPe/9TFgKkFm3ej9GM7JFsSITyQgr2KHlLMLSBk4Z+9TsDBLslvYKMKug1/FAf892cSevO4mk+x+dqxw4I5Rp8HZyxAYYS7svsjB4wnJS+rC7DAKYk0heTN4Ak4qhL3iGiYUf9NmD6bbfJkOHxGnTXd9plpVEFRGfUgRTOIWIXbHDSwolZ50FP4e3OouAPKi4xh9GrtV8d6vq0CapQLg0a/j5CFvwZhQ806x39smsfBAAAAABJRU5ErkJggg==" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAY1BMVEUAAAD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD1giD////+9Ov2jTT6vor2iSv+9u797N3969v83sT6xpn5uoT5r3D3nE32lED959VL17lWAAAAEXRSTlMAHvN3+eSnubhwV6YgWU7XIs+DM+EAAAC8SURBVCjPdZJZDsMgDETZs3YxIWRPe/9TFgKkFm3ej9GM7JFsSITyQgr2KHlLMLSBk4Z+9TsDBLslvYKMKug1/FAf892cSevO4mk+x+dqxw4I5Rp8HZyxAYYS7svsjB4wnJS+rC7DAKYk0heTN4Ak4qhL3iGiYUf9NmD6bbfJkOHxGnTXd9plpVEFRGfUgRTOIWIXbHDSwolZ50FP4e3OouAPKi4xh9GrtV8d6vq0CapQLg0a/j5CFvwZhQ806x39smsfBAAAAABJRU5ErkJggg==" alt="Phone" title="Phone" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">USA</p>
                                            <h4 class="h6 ">
                                                <a href="tel:+13474414161" class>+1 347 441 4161</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-3">
                                    <div class="get-in-touch-block">
                                        <div class="icon-block">
                                            <picture>
                                                <source srcset="<?php echo asset('images/wp-icon.webp'); ?>" type="image/webp">
                                                <source srcset="images/wp-icon.png" type="image/png"><img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAAGgrv1cAAAAqFBMVEUnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAxsmc0s2k5tW06tW48tnBGundTv4BUv4F1y5mI0qeN1KuO1ayc2rbF6dXW8OHc8uXe8+fq9+/s+PHu+fPv+fP4/Pr///8WddykAAAAIHRSTlMAHh8gISJOV1hZWm9xc3d4paanuLnX4+Ty8/j5+vz9/k+mUl0AAAEPSURBVCjPZZDZVsJAEERvXHBBQQ0agzi5Km7ghqj9/3/mwyQc0HqZXqp6uhqGOwxCtg2oQcUfQbVhbKiQ1GPgogT2VMHvZxW9z89NmLIOoKeqNYB+xK2qZ1Q6i7vcZKQ+xDzyJ7UdCoAz1VQAQDEanw9zyGUmHQA0nWQPTjSW7WTUiJwMUOMzJxXqa0u7QvVr+RlLLUmqrxGh2xSrbWqg38ZN3iZlMx2K0+uOnE6LVbmf3EBzlNm1/1AXsJVUIyKe1jppi1LVt4h4WdeUjFWd/sR8Y9gVVQ5uFvF+7/Tl+fG2NT/oOA+LyGhPlM+dMZ29fcfHyuJ+83fbZr912LvcMHHIGorhqJpMqtFwty38At+EPFjEzQ5QAAAAAElFTkSuQmCC" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAAGgrv1cAAAAqFBMVEUnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAnrmAxsmc0s2k5tW06tW48tnBGundTv4BUv4F1y5mI0qeN1KuO1ayc2rbF6dXW8OHc8uXe8+fq9+/s+PHu+fPv+fP4/Pr///8WddykAAAAIHRSTlMAHh8gISJOV1hZWm9xc3d4paanuLnX4+Ty8/j5+vz9/k+mUl0AAAEPSURBVCjPZZDZVsJAEERvXHBBQQ0agzi5Km7ghqj9/3/mwyQc0HqZXqp6uhqGOwxCtg2oQcUfQbVhbKiQ1GPgogT2VMHvZxW9z89NmLIOoKeqNYB+xK2qZ1Q6i7vcZKQ+xDzyJ7UdCoAz1VQAQDEanw9zyGUmHQA0nWQPTjSW7WTUiJwMUOMzJxXqa0u7QvVr+RlLLUmqrxGh2xSrbWqg38ZN3iZlMx2K0+uOnE6LVbmf3EBzlNm1/1AXsJVUIyKe1jppi1LVt4h4WdeUjFWd/sR8Y9gVVQ5uFvF+7/Tl+fG2NT/oOA+LyGhPlM+dMZ29fcfHyuJ+83fbZr912LvcMHHIGorhqJpMqtFwty38At+EPFjEzQ5QAAAAAElFTkSuQmCC" alt="Phone" title="Phone" class="img-item">
                                            </picture>
                                        </div>
                                        <div class="right-content">
                                            <p class="text-secondary text-md">UK</p>
                                            <h4 class="h6 ">
                                                <a href="tel:+4402079938766" class>+44 020 7993 8766</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="sidebar-backdrop"></div>
        <div class="right-nav-elements ">

            <div class="align-items-center d-flex hire-us">
                <a href="<?php echo base_url('get-quote') ?>" class="btn btn-primary px-3 py-2  text-capitalize text-nowrap d-none d-md-inline-block" id="hire-developer-b-cta">hire developers <span class="long-arrow-icon-css icon-item right mt-0 ml-2"></span></a>
            </div>
            <div class="menu-icon-block" onclick="if (!window.__cfRLUnblockHandlers) return false; openNav()" data-cf-modified-591e8dac46237a91d428b1a4->
                <span class="btn hamburger-icon">
                    <span class="bars"></span>
                    <span class="bars"></span>
                    <span class="bars"></span>
                </span>
            </div>
        </div>
    </div>
</nav>