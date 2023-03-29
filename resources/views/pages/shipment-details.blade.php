@extends('pages.layout.app')
@section('content')

    <style>
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type=button], input[type=submit], input[type=reset] {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>

    <div id="main_content">
        <div class="content_row row sub_page_header fullwidth " style="background-color: #eeeeee;">
            <div class="content_row_wrapper underlap default">
                <div class="col col-sm-12">
                    <div class="breadcrumb">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem">
                                <a class="icon-home" property="item" typeof="WebPage"><span property="name">Home</span></a>
                                <meta content="1" property="position">
                            </li>
                            <span class="icon-angle-right"></span>
                            <li property="itemListElement" typeof="ListItem">
                                <span property="name"> Product Details</span>
                                <meta property="position" content="2">
                            </li>
                        </ol>
                    </div>
                    <section class="page-title">
                        <h1>Product Details [{{ $product->shipment_number }}]</h1>
                    </section>
                </div>
            </div>
        </div>
        <div class="content_row default-style no-composer overlap fullwidth">
            <div class="content_row_wrapper clearfix ">
                <div class="col col-sm-12 col-xs-12 ">
                    <div class="row fixed_heights">
                        <div class="col col-sm-9 col-xs-12 content left" style="min-height: 1676.38px;">
                            <div class="woocommerce">

                                <div class="product_holder clearfix border_grid fixed_heights woocommerce">
                                    <h3>Customer info</h3>
                                    <table class="table table-striped" style="width:100%">
                                        <tr>
                                            <th>Customer Name:</th>
                                            <td>{{ $product->rec_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Customer Email:</th>
                                            <td>{{ $product->rec_email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Customer Phone:</th>
                                            <td>{{ $product->rec_phone }}</td>
                                        </tr>
                                        <tr>
                                            <th>Customer Address:</th>
                                            <td>{{ $product->rec_address }}</td>
                                        </tr>
                                    </table>
                                    <h3>Product info</h3>
                                    <table class="table table-striped" style="width:100%">
                                        <tr>
                                            <th>Product Name:</th>
                                            <td>{{ $product->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Purchased Date:</th>
                                            <td>{{ date('d M, Y', strtotime($product->created_at)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Quantity:</th>
                                            <td>{{ $product->quantity }}</td>
                                        </tr>
                                        <tr>
                                            <th>Unit Price:</th>
                                            <td>{{ $product->unit }}</td>
                                        </tr>
                                        <tr>
                                            <th>Total Amount:</th>
                                            <td>{{ $product->amount }}</td>
                                        </tr>
                                    </table>



                                </div>
                                <!-- / end .product_holder -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
