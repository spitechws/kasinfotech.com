<?php require_once('header.php'); ?>
<header class="header-wrapper section-wrapper">
    <div class="header-main dark">
        <?php require_once('menu.php'); ?>
    </div>
</header>
<?php require_once('side-nav.php'); ?>
<section class="section-padding bg-graylight">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8 section-paragraph">
                <style type="text/css">
                    .inquiry-form-block .btn-outline-primary {
                        background-color: #f58220;
                        color: #fff
                    }

                    .trust-by-1 li {
                        margin-bottom: 25px
                    }

                    .trust-by-1 li:first-child {
                        color: #f58220
                    }

                    .full-icon-form {
                        border-top: 10px solid #f58220
                    }
                </style>
                <div class="boxed shadow-custom bg-white full-icon-form">
                    <div class="section-title-and-desc  section-paragraph">
                        <div class="section-title-block">
                            <h1 class="section-title-text h2 mb-lg">Get Quote / Get in Touch with Technical Experts</h1>
                            <form action="" class="inquiry-form-block form--square tech-form" id="contactfullForm" data-success="Thanks for your enquiry, we'll be in touch soon" data-error="Please fill all required fields">
                                <div class="row">
                                    <div class="col-12">

                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control bg-graylight validate-required focus-class" id="focus-id" maxlength="80" name="contactName" size="20" placeholder="Your Name" style="outline: rgb(149, 143, 143) solid 2px;">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control bg-graylight validate-required" placeholder="Email Address" id="email" maxlength="80" name="contactEmail" size="20">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <input type="number" class="form-control bg-graylight validate-required" placeholder="Phone Number" id="phone" maxlength="40" name="contactPhone" size="20" nkeypress="return isNumberKey(event)">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control bg-graylight validate-required" rows="3" placeholder="Describe Your Requirements" name="contactMessage"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <button class="btn btn-primary text-uppercase ls-xs" name="contactBtn">inquire
                                                    now</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>

                            <div class="col-12 text-center mt-5">
                                <p>We guarantee 100% security of your information. We will not share the details you provide above with anyone. Your email won’t be used for spamming.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="boxed bg-white shadow-custom trust-by-1">
                    <div class="row text-center">
                        <div class="col-12">
                            <span class="h4 font-bold text-center d-block d-lg-none mb-3">Trusted By</span>
                            <ul>
                                <li class="h4 font-medium d-none d-lg-block">Trusted By</li>
                                <li>
                                    <picture>
                                        <source srcset="<?php echo base_url();?>main-boot-5/images/trust-by/logo-1.webp" type="image/webp">
                                        <source srcset="<?php echo base_url();?>main-boot-5/images/trust-by/logo-1.png" type="image/png"><img data-src="data:image/webp;base64,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" src="data:image/webp;base64,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" alt="mercedes" title="mercedes">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="<?php echo base_url();?>main-boot-5/images/trust-by/logo-2.webp" type="image/webp">
                                        <source srcset="<?php echo base_url();?>main-boot-5/images/trust-by/logo-2.png" type="image/png"><img data-src="data:image/webp;base64,UklGRn4FAABXRUJQVlA4THEFAAAvhcAREOdDkG1T4/sj7ATzNm8CghLJOqANGhxT7XS5AORv27Y8yf1tDEaX3d06MEilVGK03Up3Mxbf9d8/77aPw3e/R/R/AvQf194d+ZujaPbX0O2kKm7zk/RaSNnhavppawXpmN/hFPc+dgWVoYnSN6c7+r4clAJcrAwdxQqL7x/Uy9memlwPi72uDJ/MyY83NxIqM3ln6FfW/KkIsWPgTkwRx+4AhWQFaOkF9nSK+8BQu9dil7o+7mFnSzg7JakhfTNWbA578Ln3StxTZ08o/qxI80zhWFILHE1fDxwph81d81MvJTa6OvNQBNjsrZfUXAJDfvpZZC39UO5RSoP8VJt0a+h31rXgpeo8hAvv7tWqxPKgMNUkKX6l72sOwqSHEl3AVxW/3xYRZPvisp+Ariq/1N1/t1AAeFUkPsqFyGDlnHkFkPs9cL3KG+sUb3e1LcG18v58K7jIvZB0ztjcb19QfFvO+gxwvbxR1Q8cOWA8UHBYBHxz0O9qAbgVhVQ9kHUwLfWthx5an0y1q6jjfjRS0ycHfZJq7wz9Cv1yrKKBpDrzICrp/r7Jn5cz65FcKddnJCVMKjo1bwJ8cQEnvjiAnCPoD5ckKQS6T0Eth0Ch1tQAh77YBBKS4t9hyxwDA6ehPoB7phXY9MUC0CopBhyZXWD0VO6ZV+YK8M8Xn4CrkpSFMJC0BsycyoDpNPeBz74YAx6bfaBJ0h/g62kkD8wt0wNM+KIbeGM2gGuSPgMLp5D4DZBPmgmgxxd3gVnzE3gqaRLYju7sCnZG9hdw3xdtwIqZBV5LGgHyUdW+y2OPGhyHwDlfBCdQiEsaAaYldQPURVI/fIwzf0u2CcjFfKEF4LKkTmBZ0kNzLoILEzncuXtyPgSW5c1RoEfSNSAXky6b22UtLFLiQ7lHgUl/PAa+SEoCXJIaTFdZpa8mXMtAyh9NQCYuaRfokoI8MHEqvHXUh0CbP7QBXJf0EfgsaQP4FUX49cXdgaw5SZgUsCePjgHvJXUBmZj0GdiNYL5Fkm4bbpjPwLRPbgE7gXQB4KY0CFBTzu4NuTfMS0nVOeCBT+IZ4JoU7AFp6ZG5Us6Ain4w3ZKeAPkan2gOmJY0DhxW6ZzpimzWpCT9BL7Kq7eBk2rpJsALXTezkS2ZK1JrCDz2S3wfeCnF9oD98wdmS+PRNIbAUVwaAU6q/aK3wEYgDQLkcTZNRPMaYFpKHAGT8mxbCNyTGvOU2PMvksS+uSm9BLjkG30DFiSlS3GW1w2wKsV3gEV59xbAbak5d0o1h+aZ1AHwyD9aAZYCadixHcGw4z3AekxV28B2zEOPAB5JiW3gV1NY3qg5XzB3pV6AF/JwsApsJ6QbsFyjpWiqVgG+SrVHwFbcR7oP8EbS8HajNBTNOECmSUoDpOTnv0CuTYq1SLoaSQc2JV0MgZXAU5cBfgZyBtsR3MibeSm2DHBdvp4BeO7SUHlXMgAbNVI/wCd5u/4YOGl1tZf1JwOQOSOdywGZRn+pE+BvzKGFcpzhXSm+AvBSHg++AQy6OiPpkvQO4HfgMzUdAeFNR3UmglFJdwAyzfL7I4CDJqP35X2JSS2H5pl8Pw6wWGUas+UsJKSqJYAZeb9qCWDeaKiMxaQUzAKsJfynlkOAAZPYKmkxKektwHG7KuG1PEC3JF0rlLCYlNQLEN5WZXxmSElSV7GFpKQUtkuVctCETyVpxPUjIelpaIZVOccAwpQk9ZjZuKTOECAdVJBgBtsrdyyQ1I+dC1RJYzOGdNwhKT6JnYupsgajhr9NrqZ/2HSgijtgOHxinh5hBwNV4FQe++3s2W/YfIcq89U9Q6GA3b+qSl3/3bh/NKpyB69OXNnuQP83AA==" src="data:image/webp;base64,UklGRn4FAABXRUJQVlA4THEFAAAvhcAREOdDkG1T4/sj7ATzNm8CghLJOqANGhxT7XS5AORv27Y8yf1tDEaX3d06MEilVGK03Up3Mxbf9d8/77aPw3e/R/R/AvQf194d+ZujaPbX0O2kKm7zk/RaSNnhavppawXpmN/hFPc+dgWVoYnSN6c7+r4clAJcrAwdxQqL7x/Uy9memlwPi72uDJ/MyY83NxIqM3ln6FfW/KkIsWPgTkwRx+4AhWQFaOkF9nSK+8BQu9dil7o+7mFnSzg7JakhfTNWbA578Ln3StxTZ08o/qxI80zhWFILHE1fDxwph81d81MvJTa6OvNQBNjsrZfUXAJDfvpZZC39UO5RSoP8VJt0a+h31rXgpeo8hAvv7tWqxPKgMNUkKX6l72sOwqSHEl3AVxW/3xYRZPvisp+Ariq/1N1/t1AAeFUkPsqFyGDlnHkFkPs9cL3KG+sUb3e1LcG18v58K7jIvZB0ztjcb19QfFvO+gxwvbxR1Q8cOWA8UHBYBHxz0O9qAbgVhVQ9kHUwLfWthx5an0y1q6jjfjRS0ycHfZJq7wz9Cv1yrKKBpDrzICrp/r7Jn5cz65FcKddnJCVMKjo1bwJ8cQEnvjiAnCPoD5ckKQS6T0Eth0Ch1tQAh77YBBKS4t9hyxwDA6ehPoB7phXY9MUC0CopBhyZXWD0VO6ZV+YK8M8Xn4CrkpSFMJC0BsycyoDpNPeBz74YAx6bfaBJ0h/g62kkD8wt0wNM+KIbeGM2gGuSPgMLp5D4DZBPmgmgxxd3gVnzE3gqaRLYju7sCnZG9hdw3xdtwIqZBV5LGgHyUdW+y2OPGhyHwDlfBCdQiEsaAaYldQPURVI/fIwzf0u2CcjFfKEF4LKkTmBZ0kNzLoILEzncuXtyPgSW5c1RoEfSNSAXky6b22UtLFLiQ7lHgUl/PAa+SEoCXJIaTFdZpa8mXMtAyh9NQCYuaRfokoI8MHEqvHXUh0CbP7QBXJf0EfgsaQP4FUX49cXdgaw5SZgUsCePjgHvJXUBmZj0GdiNYL5Fkm4bbpjPwLRPbgE7gXQB4KY0CFBTzu4NuTfMS0nVOeCBT+IZ4JoU7AFp6ZG5Us6Ain4w3ZKeAPkan2gOmJY0DhxW6ZzpimzWpCT9BL7Kq7eBk2rpJsALXTezkS2ZK1JrCDz2S3wfeCnF9oD98wdmS+PRNIbAUVwaAU6q/aK3wEYgDQLkcTZNRPMaYFpKHAGT8mxbCNyTGvOU2PMvksS+uSm9BLjkG30DFiSlS3GW1w2wKsV3gEV59xbAbak5d0o1h+aZ1AHwyD9aAZYCadixHcGw4z3AekxV28B2zEOPAB5JiW3gV1NY3qg5XzB3pV6AF/JwsApsJ6QbsFyjpWiqVgG+SrVHwFbcR7oP8EbS8HajNBTNOECmSUoDpOTnv0CuTYq1SLoaSQc2JV0MgZXAU5cBfgZyBtsR3MibeSm2DHBdvp4BeO7SUHlXMgAbNVI/wCd5u/4YOGl1tZf1JwOQOSOdywGZRn+pE+BvzKGFcpzhXSm+AvBSHg++AQy6OiPpkvQO4HfgMzUdAeFNR3UmglFJdwAyzfL7I4CDJqP35X2JSS2H5pl8Pw6wWGUas+UsJKSqJYAZeb9qCWDeaKiMxaQUzAKsJfynlkOAAZPYKmkxKektwHG7KuG1PEC3JF0rlLCYlNQLEN5WZXxmSElSV7GFpKQUtkuVctCETyVpxPUjIelpaIZVOccAwpQk9ZjZuKTOECAdVJBgBtsrdyyQ1I+dC1RJYzOGdNwhKT6JnYupsgajhr9NrqZ/2HSgijtgOHxinh5hBwNV4FQe++3s2W/YfIcq89U9Q6GA3b+qSl3/3bh/NKpyB69OXNnuQP83AA==" alt="wb" title="wb">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="<?php echo base_url();?>main-boot-5/images/trust-by/logo-3.webp" type="image/webp">
                                        <source srcset="<?php echo base_url();?>main-boot-5/images/trust-by/logo-3.png" type="image/png"><img data-src="data:image/webp;base64,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" src="data:image/webp;base64,UklGRgAGAABXRUJQVlA4TPMFAAAvhcAREAckFkxmnD9E/7zN2wQkdLyD1rVti9PqmQRCaJuEFne3lHpxd6lRnAru7p7M/d+/mSGwQ4/2QUT/J0D/Jx96PTC/cxEH+3L3z2hjefApSu3Z4f57P9+FnppxEr3V/epBnkX7xr81h5JHA2yMfSzNfh58kVlc3zG+eusCbHwKJMiqW7Qxb2v8yeKCtWq/PPvym6avnOB6JJyI8BIeYxPB5PAjDjPeTH/5yKkDxL5l3OvVKd5/Jgel52coob7a+bgBd4NBb+lHsNlzaZxMjducJ4mHjAzfGHD+1tMP6M87A47rLWmVo6QnBTsvDFjIcMuEyawLYD4oyTrk+xMgBXpuDK6iLm1QdgRM+CSpETs3iWWmukmhCQPG/A4DsAbM+iSpNsawknfK5aLPg1R5bLAQNBowl1IkhcZs/viTWAV89KTgtMFOWJJ/35gcGRnftmEuVUm8EVa9SS1xgIOwpAbD+a7NUjLvh9v7qOoWYP+59NYt9i2s5D4OpN9HRdcAy369uOHH54nfk60hPaCVkhQWgKx7qegaYEiq6PXrwSvumpLBHlB6P9XYgF2qR1kJXYlLfTw3wPtgMHAf9QLs+iVZ+X63tKrWrzOL86Ot0Xyfh+dAnVNqbl3b6OTvpcXeVIeGm/AjSa/F9WbvV29tmoeUXYDPkj4z6ZDeshrH42lEKq00tA1nQSn6dQ+PfyxJUZt0I/9jhfUAgfrvB9w3vtya7qSoceiTlqBYiozf4T0eUXGcAWMY6JD/Au+fpZxb1iTlLgGzVqIKxm9I7NUbJ+sAoELagX5FzvF8d7TyRloCGiVVAyeWamPe5pS6B1GpKYbZkJiyZR7wo4N6jTHpGGb0A/Poz5eOt+WZaTIzAGJFUiAGFEqvuoDTldlvfY01OT71wLqlAZwXEuEbxTxbmx4ZAU4Ly+s/dX5dOHGKvXQoN9akK1jQEfA5KO8fDA4D0jrQJukdUCXX0B2UqwPAjjZynYhR2B2seSZJecCJXEPR3wBNDhHjQgLWFQNi+4s/B9vfVmRaDhMOjEojwISkObCzMjIiKUY/LKjaNj6pDhKQFlvJl2sxcOUmaQBodAgZV0oD9rSP5+vJQknbEL+BeJ7eAisq+oarnSf5L6D61RXAsNSGnYAwH+Vedp/MDbAzHYqMc0WAC2VN7F17ADrli8HhR2DdygMOtIjHMqkKjgPbAMs+aYOjBGj3ItetFrjz0BEDBuTYaWwqB8AnqbBrcnZypHf47zVAUQawYW0ATX4bjjTuIZ4n9cGP7wCXYakG5hJRGLsocqkH8FA0fb72To7+Y+Obio0XeraMo73dEYiewmAhsKgy4Dp0anQBG/WVZQUvA5ImYQHztZRxBp8SobfcNVoO7+/huRuzVmVGhibZW7NxHNEQzFYDs9IcsBODdc0Bb+U+jvOUlHMA12kJUQfMh42PRiAR1bZx7FOlEdH5VUCRzvUYx19f1N7ATB0wLmXGcZz13wLPJV9WtLFA6ne6fB4auAO6lOB2uO0OSC1GMAFvY5jvpTojqK3YG0vmy8+LAIPGiKRRp/YC4Kr52/otcBdWqdP2sg2w6U+U3t3BZf+LjsRkz+P415IqjIBew83G0tL2Nc5Ro1dS8Mgh7z2e62XdOjifRJT4ggMgdmJEvKXU/7Vx3EuXlAfYkppsPC/5yoFmSSq4BablbSZF/hsvexE9ZGDMxrktP+AULGyaucZ1OyxJacCVJJVse9j64FPaHZQaKt88GUvVS9st1iKpAY8TaXrg/AUn4Ppga+vwEs8/A3Jcgl1DVnHv/NbexlR7rszo1g/LwbXXZT5LklbcNqr1CCv3Xe6/VSnXwOvmHIeHb77A3h3OlZmNOZSZl67HWZ2Y24lyS/9FXzhFrgOGnaFHG7SBubGlK7ezv/0VKfrPW0fGgh7xJlAn6Vl2cVlZUWZAybEI8+1jegvbASXdbiMefEyKZPuUfJeMBT31vjuj+cl7iZn95FUbF9aTV2fM6MkvMTqevkAMqHr6NAmE/gHCF1zqXzBnd/af4H9mAQA=" alt="disney" title="disney">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="<?php echo base_url();?>main-boot-5/images/trust-by/logo-4.webp" type="image/webp">
                                        <source srcset="<?php echo base_url();?>main-boot-5/images/trust-by/logo-4.png" type="image/png"><img data-src="data:image/webp;base64,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" src="data:image/webp;base64,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" alt="dubai bazar" title="dubai bazar">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="<?php echo base_url();?>main-boot-5/images/trust-by/logo-5.webp" type="image/webp">
                                        <source srcset="<?php echo base_url();?>main-boot-5/images/trust-by/logo-5.png" type="image/png"><img data-src="<?php echo base_url();?>main-boot-5/images/trust-by/xlogo-5.png.pagespeed.ic.Wds-vYemON.webp" src="<?php echo base_url();?>main-boot-5/images/trust-by/xlogo-5.png.pagespeed.ic.Wds-vYemON.webp" alt="red bull" title="red bull">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="<?php echo base_url();?>main-boot-5/images/trust-by/logo-6.webp" type="image/webp">
                                        <source srcset="<?php echo base_url();?>main-boot-5/images/trust-by/logo-6.png" type="image/png"><img data-src="<?php echo base_url();?>main-boot-5/images/trust-by/xlogo-6.png.pagespeed.ic.k51njrcn0F.webp" src="<?php echo base_url();?>main-boot-5/images/trust-by/xlogo-6.png.pagespeed.ic.k51njrcn0F.webp" alt="3m" title="3m">
                                    </picture>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 section-paragraph">
                <div class="section-title-and-desc  section-paragraph">
                    <div class="section-title-block">
                        <h2 class="section-title-text h3">At Bacancy, We Have Made it Easy for Clients to Reach Us and Get Their Solutions Weaved</h2>
                    </div>
                </div>
                <ul class="style-check mb-2">
                    <li>
                        <h2 class="h4 font-bold">Put Forward Your Requirement</h2>
                    </li>
                </ul>
                <p>Drop your inquiry in the form given on the right side of this page. And within 24 hours, one of our business development executive will reach you for further communication.</p>
                <ul class="style-check mb-2">
                    <li>
                        <h2 class="h4 font-bold">Sign Non-Disclosure Agreement</h2>
                    </li>
                </ul>
                <p>With the help of an NDA, we make you feel secure. Your idea will be yours. Signing an NDA assures you the privacy of your idea and project.</p>
                <ul class="style-check mb-2">
                    <li>
                        <h2 class="h4 font-bold">Analyzing Your Requirement</h2>
                    </li>
                </ul>
                <p>Once you have signed the NDA, we will analyze the requirements put forward by you. Our team of scrum masters will read and analyze the same, and will get back to you within few hours.</p>
                <ul class="style-check mb-2">
                    <li>
                        <h2 class="h4 font-bold">Estimated Budget</h2>
                    </li>
                </ul>
                <p>Once our team of scrum masters and business development managers are done with analyzing the project and compilation of necessary resources required for the project, we will get back to you with Estimated Budget/Cost and Estimated Time Required for completion of project successfully.</p>
            </div>
            <div class="col-lg-6">
                <div class="section-title-and-desc  section-paragraph text-center">
                    <div class="section-title-block">
                        <h2 class="section-title-text h1">On-Call Support</h2>
                    </div>
                </div>
                <ul class="text-18 text-center">
                    <li class="mx-1 my-1 w-md-auto w-100 text-center mb-4">
                        <picture>
                            <source srcset="<?php echo base_url();?>main-boot-5/images/call-yellow-icon.webp" type="image/webp">
                            <source srcset="<?php echo base_url();?>main-boot-5/images/call-yellow-icon.png?v-1" type="image/jpeg">
                            <img data-src="<?php echo base_url();?>main-boot-5/images/xcall-yellow-icon.png,qv-1.pagespeed.ic.hbciBWjNYF.webp" src="<?php echo base_url();?>main-boot-5/images/xcall-yellow-icon.png,qv-1.pagespeed.ic.hbciBWjNYF.webp" alt="Bacancy Phone" title="Bacancy Phone" class="mr-3">
                        </picture>
                    </li>
                    <li class="mx-3 my-1 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 text-right">
                                <picture>
                                    <source srcset="<?php echo base_url();?>main-boot-5/images/usa-flag-1-1.webp" type="image/webp">
                                    <source srcset="<?php echo base_url();?>main-boot-5/images/usa-flag-1-1.png?v-1" type="image/jpeg">
                                    <img src="<?php echo base_url();?>main-boot-5/images/xusa-flag-1-1.png,qv-1.pagespeed.ic.PFky43mOuV.webp" alt="Bacancy USA Phone" title="Bacancy USA Phone" class="mr-3">
                                </picture>
                            </div>
                            <div class="col-lg-7 text-left">
                                <a href="tel:+<?php echo $contact_number?>" class="h4"><?php echo $contact_number?></a>
                            </div>
                        </div>
                    </li>
                    <li class="mx-3 my-1 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 text-right">
                                <picture>
                                    <source srcset="<?php echo base_url();?>main-boot-5/images/canada-flag-1-1.webp" type="image/webp">
                                    <source srcset="<?php echo base_url();?>main-boot-5/images/canada-flag-1-1.png?v-1" type="image/jpeg"><img data-src="<?php echo base_url();?>main-boot-5/images/xcanada-flag-1-1.png,qv-1.pagespeed.ic.XvL3Imr1I7.webp" src="<?php echo base_url();?>main-boot-5/images/xcanada-flag-1-1.png,qv-1.pagespeed.ic.XvL3Imr1I7.webp" alt="Bacancy Canada Phone" class="mr-3">
                                </picture>
                            </div>
                            <div class="col-lg-7 text-left">
                                <a href="tel:+<?php echo $whatsapp?>" class="h4"><?php echo $whatsapp?></a>
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="text-18 text-center">

                    <li class="mx-3 my-1 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 text-right">
                                <picture>
                                    <source srcset="<?php echo base_url();?>main-boot-5/images/skype-1-1.webp" type="image/webp">
                                    <source srcset="<?php echo base_url();?>main-boot-5/images/skype-1-1.png?v-1" type="image/jpeg"><img data-src="<?php echo base_url();?>main-boot-5/images/xskype-1-1.png,qv-1.pagespeed.ic.IBOTS-cKHn.webp" src="<?php echo base_url();?>main-boot-5/images/xskype-1-1.png,qv-1.pagespeed.ic.IBOTS-cKHn.webp" alt="Bacancy Skype" title="Bacancy Skype" class="mr-3">
                                </picture>
                            </div>
                            <div class="col-lg-7 text-left">
                                <span class="font-bold h4">Skype : </span> <a href="skype:<?php echo $skype_id?>?call" class="h4"><?php echo $skype_id?></a>
                            </div>
                        </div>
                    </li>
                    <li class="mx-3 my-1 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 text-right">
                                <picture>
                                    <source srcset="<?php echo base_url();?>main-boot-5/images/gmail-1-1.webp" type="image/webp">
                                    <source srcset="<?php echo base_url();?>main-boot-5/images/gmail-1-1.png?v-1" type="image/jpeg"><img data-src="<?php echo base_url();?>main-boot-5/images/xgmail-1-1.png,qv-1.pagespeed.ic.VPtiobG6zO.webp" src="<?php echo base_url();?>main-boot-5/images/xgmail-1-1.png,qv-1.pagespeed.ic.VPtiobG6zO.webp" alt="Bacancy Sales Mail" title="Bacancy Sales Mail" class="mr-3">
                                </picture>
                            </div>
                            <div class="col-lg-7 text-left">
                                <span class="font-bold h4">Sales : </span><span class="h4"><a href="mailto:<?php echo $contact_email?>" class="mail-id"><?php echo $contact_email?></a></span>
                            </div>
                        </div>
                    </li>
                    <li class="mx-3 my-1 mb-4 mr-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 text-right">
                                <picture>
                                    <source srcset="<?php echo base_url();?>main-boot-5/images/gmail-1-1.webp" type="image/webp">
                                    <source srcset="<?php echo base_url();?>main-boot-5/images/gmail-1-1.png?v-1" type="image/jpeg"><img data-src="<?php echo base_url();?>main-boot-5/images/xgmail-1-1.png,qv-1.pagespeed.ic.VPtiobG6zO.webp" src="<?php echo base_url();?>main-boot-5/images/xgmail-1-1.png,qv-1.pagespeed.ic.VPtiobG6zO.webp" alt="Bacancy Career Mail" title="Bacancy Career Mail" class="mr-3">
                                </picture>
                            </div>
                            <div class="col-lg-7 text-left">
                                <span class="font-bold h4">Career : </span><span class="h4"><a href="mailto:<?php echo $career_email?>"><?php echo $career_email?></a></span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section-padding section-padding-md banner-post company-counting">
    <figure class="banner-post-img">
        <picture>
            <source srcset="<?php echo base_url();?>main-boot-5/images/counting-bg.webp" type="image/webp">
            <source srcset="<?php echo base_url();?>main-boot-5/images/counting-bg.jpg" type="image/jpeg"><img data-src="<?php echo base_url();?>main-boot-5/images/xcounting-bg.jpg.pagespeed.ic.gtQG_MquTp.webp" src="<?php echo base_url();?>main-boot-5/images/xcounting-bg.jpg.pagespeed.ic.gtQG_MquTp.webp" alt="Our Development Center Strength" title="Our Development Center Strength" class="">
        </picture>
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="section-title-and-desc mb-0">
                    <div class="section-title-block text-center">
                        <h2 class="section-title-text h1">12+ Years and Counting...</h2>
                        <p class="h3 section-title-text-two font-light top-line">By establishing a IT development center, we offer our tailored engagement models cater to the unique needs by providing <b>B2B</b> and <b>B2C</b> Dedicated development support.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center align-items-lg-center section-padding section-padding-md">
            <div class="col-lg-6">
                <picture>
                    <source srcset="<?php echo base_url();?>main-boot-5/images/engagement-model/side-img-5.webp" type="image/webp">
                    <source srcset="<?php echo base_url();?>main-boot-5/images/engagement-model/side-img-5.jpg" type="image/jpeg"><img data-src="<?php echo base_url();?>main-boot-5/images/engagement-model/xside-img-5.jpg.pagespeed.ic.8AqLueOKEE.webp" src="<?php echo base_url();?>main-boot-5/images/engagement-model/xside-img-5.jpg.pagespeed.ic.8AqLueOKEE.webp" alt="Our Development Center Strength" title="Our Development Center Strength" class="mb-5 mb-lg-0">
                </picture>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-xl font-bold">Our Development Center Strength</h3>
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-4 mb-4 mb-lg-0">
                        <picture>
                            <source srcset="<?php echo base_url();?>main-boot-5/images/agile-developer.webp" type="image/webp">
                            <source srcset="<?php echo base_url();?>main-boot-5/images/agile-developer.png" type="image/png"><img data-src="<?php echo base_url();?>main-boot-5/images/xagile-developer.png.pagespeed.ic.13HIIIEYEx.webp" src="<?php echo base_url();?>main-boot-5/images/xagile-developer.png.pagespeed.ic.13HIIIEYEx.webp" alt="Agile Developers" title="Agile Developers" class="">
                        </picture>
                        <h4 class="h1 font-bold mt-3">1050+</h4>
                        <p>Agile Developers</p>
                    </div>
                    <div class="col-6 col-lg-4 mb-4 mb-lg-0">
                        <picture>
                            <source srcset="<?php echo base_url();?>main-boot-5/images/agile-coach.webp" type="image/webp">
                            <source srcset="<?php echo base_url();?>main-boot-5/images/agile-coach.png" type="image/png"><img data-src="<?php echo base_url();?>main-boot-5/images/xagile-coach.png.pagespeed.ic.MQdoRh2rbB.webp" src="<?php echo base_url();?>main-boot-5/images/xagile-coach.png.pagespeed.ic.MQdoRh2rbB.webp" alt="Agile Coaches" title="Agile Coaches" class="">
                        </picture>
                        <h4 class="h1 font-bold mt-3">05</h4>
                        <p>Agile Coaches</p>
                    </div>
                    <div class="col-6 col-lg-4 ">
                        <picture>
                            <source srcset="<?php echo base_url();?>main-boot-5/images/certified-scrum-master.webp" type="image/webp">
                            <source srcset="<?php echo base_url();?>main-boot-5/images/certified-scrum-master.png" type="image/png"><img data-src="<?php echo base_url();?>main-boot-5/images/xcertified-scrum-master.png.pagespeed.ic.iAwwUp-Dqu.webp" src="<?php echo base_url();?>main-boot-5/images/xcertified-scrum-master.png.pagespeed.ic.iAwwUp-Dqu.webp" alt="Certified Scrum Masters" title="Certified Scrum Masters" class="">
                        </picture>
                        <h4 class="h1 font-bold mt-3">14</h4>
                        <p>Certified Scrum Masters</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center count-bottom justify-content-center">
            <div class="col">
                <picture>
                    <source srcset="<?php echo base_url();?>main-boot-5/images/country-icon-1.webp" type="image/webp">
                    <source srcset="<?php echo base_url();?>main-boot-5/images/country-icon-1.png" type="image/png"><img data-src="<?php echo base_url();?>main-boot-5/images/xcountry-icon-1.png.pagespeed.ic.BFbev0UkE9.webp" src="<?php echo base_url();?>main-boot-5/images/xcountry-icon-1.png.pagespeed.ic.BFbev0UkE9.webp" alt="Work at Your Time Zone" title="Work at Your Time Zone" class="mb-lg">
                </picture>
                <p>Work at Your Time Zone</p>
            </div>
            <div class="col">
                <picture>
                    <source srcset="<?php echo base_url();?>main-boot-5/images/country-icon-2.webp" type="image/webp">
                    <source srcset="<?php echo base_url();?>main-boot-5/images/country-icon-2.png" type="image/png"><img data-src="<?php echo base_url();?>main-boot-5/images/xcountry-icon-2.png.pagespeed.ic.CD9p7LrMxj.webp" src="<?php echo base_url();?>main-boot-5/images/xcountry-icon-2.png.pagespeed.ic.CD9p7LrMxj.webp" alt="Easy Communication" title="Easy Communication" class="mb-lg">
                </picture>
                <p>Easy Communication</p>
            </div>
            <div class="col">
                <picture>
                    <source srcset="<?php echo base_url();?>main-boot-5/images/country-icon-3.webp" type="image/webp">
                    <source srcset="<?php echo base_url();?>main-boot-5/images/country-icon-3.png" type="image/png"><img data-src="<?php echo base_url();?>main-boot-5/images/xcountry-icon-3.png.pagespeed.ic.OfsrCfoBPY.webp" src="<?php echo base_url();?>main-boot-5/images/xcountry-icon-3.png.pagespeed.ic.OfsrCfoBPY.webp" alt="Hire in 24 Hours" title="Hire in 24 Hours" class="mb-lg">
                </picture>
                <p>Hire in 48 Hours</p>
            </div>
            <div class="col">
                <picture>
                    <source srcset="<?php echo base_url();?>main-boot-5/images/country-icon-4.webp" type="image/webp">
                    <source srcset="<?php echo base_url();?>main-boot-5/images/country-icon-4.png" type="image/png"><img data-src="<?php echo base_url();?>main-boot-5/images/xcountry-icon-4.png.pagespeed.ic.ctr6PWgiYB.webp" src="<?php echo base_url();?>main-boot-5/images/xcountry-icon-4.png.pagespeed.ic.ctr6PWgiYB.webp" alt="In Business Since 2011" title="In Business Since 2011" class="mb-lg">
                </picture>
                <p>In Business Since 2011</p>
            </div>
            <div class="col mb-0">
                <picture>
                    <source srcset="<?php echo base_url();?>main-boot-5/images/country-icon-5.webp" type="image/webp">
                    <source srcset="<?php echo base_url();?>main-boot-5/images/country-icon-5.png" type="image/png"><img data-src="<?php echo base_url();?>main-boot-5/images/xcountry-icon-5.png.pagespeed.ic.oGnKvNIT_c.webp" src="<?php echo base_url();?>main-boot-5/images/xcountry-icon-5.png.pagespeed.ic.oGnKvNIT_c.webp" alt="5/5 Pro User Rating" title="5/5 Pro User Rating" class="mb-lg">
                </picture>
                <p>5/5 Pro User Rating</p>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="container">
        <div class="insight-slider-wrapper section-padding pb-0 section-paragraph">
            <div class="insight-slider-navigation" id="insight-navigation-block">
                <ul class="nav-block">
                    <li class="nav-item active">
                        <a href="javascript:void(0)" class="nav-link text-xxl">
                            <span class="slide-number">01</span>
                            <span class="text">Top 1% IT Talent</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link text-xxl">
                            <span class="slide-number">02</span>
                            <span class="text">Time Zone Aligned</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link text-xxl">
                            <span class="slide-number">03</span>
                            <span class="text">Experienced Team</span>
                        </a>
                    </li>
                    <span class="active-line"></span>
                </ul>
            </div>
            <div class="insight-slider-main section-padding-md ">
                <div class="owl-carousel owl-nav-top-right owl-loaded owl-drag" id="insight-owl-carousel" data-sync="#insight-navigation-block">



                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3888px;">
                            <div class="owl-item active" style="width: 1296px;">
                                <div class="item">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 offset-lg-1 col-md-4 col-sm-6">
                                            <picture>
                                                <source srcset="<?php echo base_url();?>main-boot-5/images/insight-slide-1.webp" type="image/webp">
                                                <source srcset="<?php echo base_url();?>main-boot-5/images/insight-slide-1.jpg?v-1" type="image/jpeg"><img data-src="<?php echo base_url();?>main-boot-5/images/xinsight-slide-1.jpg,qv-1.pagespeed.ic._FQ1OEjjc1.webp" src="<?php echo base_url();?>main-boot-5/images/xinsight-slide-1.jpg,qv-1.pagespeed.ic._FQ1OEjjc1.webp" alt="Top 1% IT Talent" title="Top 1% IT Talent" class="slider-img">
                                            </picture>
                                        </div>
                                        <div class="col-lg-4 offset-lg-1 col-md-8">
                                            <h4 class="h3 slider-title font-semibold">Top 1% IT Talent</h4>
                                            <p class="text-lg text-secondary    ">Bacancy Technology is an exclusive hub of top dedicated software developers, UI/UX designers, QA experts, and product managers with incredibly rare and hidden talents you will ever come across. We let you access the top 1% of IT talent worldwide, from independent software developers to fully managed teams.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 1296px;">
                                <div class="item">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 offset-lg-1 col-md-4 col-sm-6">
                                            <picture>
                                                <source srcset="<?php echo base_url();?>main-boot-5/images/insight-slide-2.webp" type="image/webp">
                                                <source srcset="<?php echo base_url();?>main-boot-5/images/insight-slide-2.jpg?v-1" type="image/jpeg"><img data-src="<?php echo base_url();?>main-boot-5/images/xinsight-slide-2.jpg,qv-1.pagespeed.ic.vEG9u-JiPl.webp" src="<?php echo base_url();?>main-boot-5/images/xinsight-slide-2.jpg,qv-1.pagespeed.ic.vEG9u-JiPl.webp" alt="Time Zone Aligned" title="Time Zone Aligned" class="slider-img">
                                            </picture>
                                        </div>
                                        <div class="col-lg-4 offset-lg-1 col-md-8">
                                            <h4 class="h3 slider-title font-semibold">Time Zone Aligned</h4>
                                            <p class="text-lg text-secondary">Timezone is never a constraint when you are working with Bacancy Technology. We follow a simple procedure- our developers and your time zone. Hire dedicated software developers from us and collaborate from far away to work according to your time zone, deadline, and milestone.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 1296px;">
                                <div class="item">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 offset-lg-1 col-md-4 col-sm-6">
                                            <picture>
                                                <source srcset="<?php echo base_url();?>main-boot-5/images/insight-slide-3.webp" type="image/webp">
                                                <source srcset="<?php echo base_url();?>main-boot-5/images/insight-slide-3.jpg?v-1" type="image/jpeg"><img data-src="<?php echo base_url();?>main-boot-5/images/xinsight-slide-3.jpg,qv-1.pagespeed.ic.zwTqXmxv14.webp" src="<?php echo base_url();?>main-boot-5/images/xinsight-slide-3.jpg,qv-1.pagespeed.ic.zwTqXmxv14.webp" alt="Experienced Team" title="Experienced Team" class="slider-img">
                                            </picture>
                                        </div>
                                        <div class="col-lg-4 offset-lg-1 col-md-8">
                                            <h4 class="h3 slider-title font-semibold">Experienced Team</h4>
                                            <p class="text-lg text-secondary    ">Whether you are looking for skilled developers in emerging technologies or looking for an extended arm to augment your existing team, we can lend a helping hand in both situations. We are a full-stack software development company with 650+ skilled and experienced software developers whom you can hire at your convenience to address ongoing business challenges.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span class="long-arrow-hover"><span class="long-arrow-icon-css icon-item icon-left"></span></span></button><button type="button" role="presentation" class="owl-next"><span class="long-arrow-hover"><span class="long-arrow-icon-css icon-item"></span></span></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once('footer.php'); ?>