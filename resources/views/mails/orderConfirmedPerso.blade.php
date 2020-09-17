
<!DOCTYPE html>
<html>
<head>
    <title>Kamobilia Order Complet</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />

    <style type="text/css">
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        /****** EMAIL CLIENT BUG FIXES - BEST NOT TO CHANGE THESE ********/

        .ExternalClass {
            width: 100%;
        }
            /* Forces Outlook.com to display emails at full width */
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
                line-height: 100%;
            }

        /* Forces Outlook.com to display normal line spacing, here is more on that*/

        body {
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
        }

        /* Prevents Webkit and Windows Mobile platforms from changing default font sizes. */

        html,
        body {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
        }

        /* Resets all body margins and padding to 0 for good measure */

        table td {
            border-collapse: collapse;
            border-spacing: 0px;
            border: 0px none;
            vertical-align: middle;
            width: auto;
        }

        /*This resolves the Outlook 07, 10, and Gmail td padding issue. Heres more info */
        /****** END BUG FIXES ********/
        /****** RESETTING DEFAULTS, IT IS BEST TO OVERWRITE THESE STYLES INLINE ********/

        .table-mobile {
            width: 600px;
            margin: 0 auto;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            background-color: white;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        .table-mobile-small {
            width: 560px !important;
        }

        body, p {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.5;
            color: #222222;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        p {
            margin: 0;
        }

        a {
            color: #ffbb00;
            text-decoration: none;
            display: inline-block;
        }

        img {
            border: 0 none;
            display: block;
        }

        @media(min-width:480px) {
            .product-header td {
                padding: 25px;
            }

            .product-image,
            .product-title,
            .product-price {
                border-bottom: 1px solid #eeeeee;
            }

            .product-title {
                padding-left: 15px;
            }

            .product-price {
                padding-right: 25px;
            }
        }

        @media (max-width:479px) {
            body {
                padding-left: 10px;
                padding-right: 10px;
            }

            table,
            table > tbody,
            table > tr,
            table > tbody > tr,
            table > tr > td,
            table > tbody > tr > td {
                width: 100% !important;
                max-width: 100% !important;
                display: block !important;
                overflow: hidden !important;
                box-sizing: border-box;
                /*height: auto !important;*/
            }

            .table-mobile-small {
                width: 95% !important;
                max-width: 100% !important;
                display: block !important;
                overflow: hidden !important;
                box-sizing: border-box;
                height: auto !important;
            }

            .full-image {
                width: 100% !important;
            }

            .footer-content p {
                text-align: left !important;
            }

            .product-title,
            .product-price {
                width: 50% !important;
                float: left;
                border-bottom: 1px solid #eeeeee;
            }

            .product-image,
            .product-title,
            .product-price {
                padding: 10px;
            }

                .product-image img {
                    width: 100% !important;
                }

                .product-price p {
                    text-align: right !important;
                }

            .product-header {
                display: none !important;
            }

            .header-item {
                display: table-cell !important;
                float: none !important;
                width: 50% !important;
            }

            .table-mobile {
                box-shadow: none !important;
                margin: 0;
                border-radius: 0;
            }
        }
    </style>

</head>
<body>

    <table width="100%" cellpadding="0" cellspacing="0">

        <tr>
            <td style="background-color:#dddddd">

                <!-- ========= Table content ========= -->


                <table cellpadding="0" cellspacing="0" width="600" class="table-mobile" align="center">
                    <tr>
                        <td height="25"></td>
                    </tr>

                    <!-- ========= Header ========= -->

                    <tr>
                        <td>

                            <table cellpadding="0" cellspacing="0" class="table-mobile-small" align="center">
                                <tr>
                                    <td class="header-item">
                                        <img src="http://localhost:8000/assets/images/logo.png" alt="" />
                                    </td>
                                    <td class="header-item">
                                        <p style="font-family:sans-serif;font-size:20px;font-weight:bold;text-transform:uppercase;margin-top:0;margin-bottom:0;color:#484848;text-align:right;">
                                            commande
                                        </p>
                                        <p style="font-family:sans-serif;font-size:12px;font-weight:normal;text-transform:uppercase;margin-top:0;margin-bottom:0;color:#484848;text-align:right;">
                                            {{$order->orderNumber}}
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- ========= Divider ========= -->

                    <tr>
                        <td>
                            <table cellpadding="0" cellspacing="0" width="100%" align="center">
                                <tr>
                                    <td height="20"></td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid #f8f8f8;" height="1"></td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- ========= Intro text ========= -->

                    <tr>
                        <td style="background:#f7f7f7;padding:35px 0;border-top:1px solid #eeeeee;">
                            <table cellpadding="0" cellspacing="0" class="table-mobile-small" align="center">

                                <tr>
                                    <td colspan="2">
                                        <p style="font-family:sans-serif;font-size:22px;font-weight:bold;text-transform:none;margin-top:0;margin-bottom:10px;color:#464951;text-align:left;">
                                            
                                            Votre commande ({{$product->name}}) est terminée 

                                        </p>
                                        
                                            <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:20px;color:#464951;text-align:left;">
                                            {{$order->message}}
                                            </p>
                                       
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- ========= User info ========= -->

                    <tr>
                        <td style="background:#ffffff;padding:35px 0;border-top:1px solid #eeeeee;border-bottom:1px solid #eeeeee;">
                            <table cellpadding="0" cellspacing="0" class="table-mobile-small" align="center">
                                <tr>
                                    <td width="100%" valign="top">
                                        <table cellpadding="0" cellspacing="0" width="100%" align="center">
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:22px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>Informations</strong>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>Nom :</strong> {{$order->nom}} {{$order->prenom}}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>Téléphone :</strong> {{$order->tele}}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>E-mail :</strong> {{$order->email}}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>Adresse :</strong> {{$order->address}}
                                                    </p>
                                                </td>
                                            </tr>
                                            {{--<tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>City:</strong> San Francisco, California
                                                    </p>
                                                </td>
                                            </tr>--}}

                                        </table>
                                    </td>
                                    {{--<td width="50%" valign="top">
                                        <table cellpadding="0" cellspacing="0" width="100%" align="center">
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:22px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>commande  détails</strong>
                                                    </p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>commande  no.:</strong> {{$order->orderNumber}}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>commande  date :</strong> {{$order->created_at}}
                                                    </p>
                                                </td>
                                            </tr>
                          
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>le prix total :</strong> {{$order->totalPrice}} MAD
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>Methode de paiement:</strong> {{$order->paymentMethode}}

                                                    </p>
                                                </td>
                                            </tr>
                                            
                                        </table>
                                    </td>--}}
                                </tr>
                            </table>
                        </td>
                    </tr>

            
                    <tr>
                        <td height="25"></td>
                    </tr>
                </table>

                <!-- ========= Footer ========= -->

                <table cellpadding="0" cellspacing="0" class="table-mobile-small" align="center">
                    <tr>
                        <td style="padding:25px 0;">
                            <p style="font-family:sans-serif;font-size:14px;font-weight:bold;text-transform:none;margin-top:0;margin-bottom:20px;padding:0;color:#3a3d45;text-align:center;">
                                
                             MERCI BEAUCOUP D'AVOIR CHOISI NOTRE PRODUIT
                            </p>
                            {{--
                            <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:20px;padding:0;color:#aaaaaa;text-align:center;">
                                 have bought from our website.
                            </p>
                            --}} 
                            <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:20px;padding:0;color:#3a3d45;text-align:center;">
                            <a style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:0;color:#3a3d45;text-decoration:underline;" href="{{route('home')}}" target="_blank">site</a> |
                                <a style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:0;color:#3a3d45;text-decoration:underline;" href="https://www.facebook.com/" target="_blank">facebook</a> |
                                <a style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:0;color:#3a3d45;text-decoration:underline;" href="https://www.instagram.com/" target="_blank">instagram</a>
                            </p>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>

  {{-- <script src="js/jquery.min.js"></script>
    <script src="js/jquery.include.js"></script>
    --}} 
</body>
</html>
