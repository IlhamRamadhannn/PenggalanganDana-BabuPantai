@extends('layout.master')

@section('content')
<div class="container mt-5">
    <br><br>
</div>

<div class="container mt-3">
    <div class="text-center mb-5 font-weight-bold">
        <h1 class="display-4" style="color: white;">{{ __('donate.title') }}</h1>

        <a href="{{ route('transaksi.store') }}" class="btn btn-primary btn-lg mt-4">{{ __('donate.donatebutton') }}</a>
    </div>

    <div class="text-center mb-5" style="color: white;">
        <h1 style="font-size: 1.5rem; color: #007bff; display: inline-block; background-color: white; padding: 20px 30px; border-radius: 8px;">
        {{ __('donate.total') }} :<br>
            <span style="font-size: 3.5rem; color: #007bff;">
                Rp {{ number_format($totalDonations, 0, ',', '.') }}
            </span>
        </h1>
    </div>

    <h2 class="text-center mb-4" style="color: white; font-size: 3rem;">{{ __('donate.top') }}</h2>

    <div class="container">
        
        <div style="backdrop-filter: blur(5px); background-color: rgba(0, 0, 0, 0.4); padding: 40px; border-radius: 10px;">
            <table class="table text-center" style="color: white;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('donate.donor') }}</th>
                        <th>{{ __('donate.amt') }}</th>
                        
                        <!-- <th>Status</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($donations as $index => $donation)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $donation->user->name }}</td>
                            <td>Rp {{ number_format($donation->total_amount, 0, ',', '.') }}</td> 
                           
                            <!-- <td>{{ ucfirst($donation->status) }}</td> Capitalize the status -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection