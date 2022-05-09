@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
     
        .myImg:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }

    </style>
    <div class="container">
        <div style="text-align: center">
            @if (session('status'))
                <strong style="color: #0d6efd;font-size: 20px">{{ session('status') }}</strong>
            @endif
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">เติมเงิน สมาชิก</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" name="search"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <table class="table table-bordered text-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ชื่อ</th>
                    <th scope="col">จำนวนเงิน</th>
                    <th scope="col">สลิป</th>
                    <th scope="col">วันที่เติม</th>
                    <th scope="col">อนุมัติ</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $idUser = 1;
                @endphp
                @foreach ($user as $user)
                    <tr class="onClickBtn">
                        <td class="col-3 col-sm-3 col-md-1">
                            {{ $idUser++ }}
                            {{-- <span class="tooltiptext" id="{{$user->code}}" onclick="functionCopy({{$user->code}})">คัดลอก</span> --}}
                        </td>
                        <td class="col-3 col-sm-3 col-md-2">
                            {{ $user->username }}
                            {{ $user->id }}
                        </td>
                        <td class="col-3 col-sm-3 col-md-2">
                            @php
                                $moneyAll = number_format($user->money, 2);
                            @endphp
                            {{ $moneyAll }}
                        </td>
                        <td class="col-3 col-sm-3 col-md-2">
                            <img src="{{ asset($user->up_image) }}" alt="" width="80" height="100" class="myImg image-up"
                                id="myImg{{ $user->id }} ">
                        </td>
                        <td class="col-3 col-sm-3 col-md-2">
                            {{ $user->created_at }}
                        </td>
                        <td class="col-3 col-sm-3 col-md-2">
                            <a href="{{route('add-money-user.show',$user->id)}}" class="btn btn-outline-info">  อนุมัติ</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div id="myModal" class="modal">
          <span class="close">&times;</span>
          <img class="modal-content" id="img01">
          <div id="caption"></div>
      </div>

        <script>
            $(".image-up").click(function() {

                let id = $(this).attr('id');
                var modal = document.getElementById("myModal");
                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById(id);
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                img.onclick = function() {
                    modal.style.display = "block";
                    modalImg.src = this.src;
                    captionText.innerHTML = this.alt;
                }

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }

            });

            /*   */
        </script>
    @endsection
