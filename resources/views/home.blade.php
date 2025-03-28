@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container-fluid">

        <div class="mb-3 tw:bg-red-500">
            <h4>Admin Dashboard</h4>
        </div>

        <div class="row mb-4">
            <div class="col-12 col-md-6 d-flex">
                <x-card class="flex-fill illustration" body-class="p-0">
                    <div class="row g-0 w-100">
                        <div class="col-6">
                            <div class="p-3 m-1">
                                <h4>Welcome Back, Admin</h4>
                                <p class="mb-0">Admin Dashboard, CodzSword</p>
                            </div>
                        </div>
                        <div class="col-6 align-self-end text-end">
                            <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                 alt="">
                        </div>
                    </div>
                </x-card>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <x-card class="flex-fill">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h4 class="mb-2">
                                $ 78.00
                            </h4>
                            <p class="mb-2">
                                Total Earnings
                            </p>
                            <div class="mb-0">
                                                <span class="badge text-success me-2">
                                                    +9.0%
                                                </span>
                                <span class="text-muted">
                                                    Since Last Month
                                                </span>
                            </div>
                        </div>
                    </div>
                </x-card>
            </div>
        </div>

        <!-- Table Element -->
        <x-card title="Basic Table" subtitle="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ducimus,
                    necessitatibus reprehenderit itaque!">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>

        </x-card>
    </div>
@endsection
