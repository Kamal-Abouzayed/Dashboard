@props(['name', 'count', 'textColor' => 'text-primary', 'borderColor' => 'border-left-primary'])

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card shadow h-100 py-2 {{ $borderColor }}">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-uppercase mb-1 {{ $textColor }}">
                        {{ $name }}
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count }}</div>
                </div>
                {{ $icon }}
            </div>
        </div>
    </div>
</div>
