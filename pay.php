<?php 
echo '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <form action="./flutter/paymentProcessor" method="POST" enctype="multipart/form-data">
        <div class="plan">
                <div class="plan-header">
                    <h6 class="plan-title mbr-fonts-style mb-3 display-7">
                        <strong>GOLD PACK</strong>
                    </h6>
                    <hr>
                    <div class="plan-price">
                        <p class="price mbr-fonts-style m-0 display-3">
                            <strong style="color: #FA64C7;">K89.99</strong>
                        </p>
                        <p class="price-term mbr-fonts-style mb-3 display-7">
                            <strong>Per 3 months</strong>
                        </p>
                    </div>
                </div>
                <div class="plan-body">
                    <div class="plan-list mb-4">
                        <ul class="list-group mbr-fonts-style list-group-flush display-7">
                            <li class="list-group-item">Access to all boarding houses
                            </li>
                            <li class="list-group-item">Calling is activated
                            </li>
                            <li class="list-group-item">Full access to isograft library
                            </li>
                            <li class="list-group-item">24/7 help</li>
                        </ul>
                    </div>';
                        echo '<button type="submit">
                                <span class="btn btn-warning display-4" style="border:none;">
                                    <span class="mbri-right mbr-iconfont mbr-iconfont-btn" 
                                            style="color: rgb(255, 138, 138);">
                                        </span>Pay Now&nbsp;
                                </span>
                            </button>';
            echo '</div>
        </div>
    </form>
</body>
</html>';
?>