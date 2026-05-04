<div class="sidebar-recent-products shadow-sm p-4 rounded-4 bg-white dark:bg-gray-800 border">
    <h3 class="mb-4 pb-2 border-bottom fw-bold text-primary" style="font-size: 20px;">
        <i class="fa-solid fa-fire-flame-curved me-2"></i>Recent Products
    </h3>
    <div class="recent-list">
        @foreach ($recentProducts as $row)
            @php
                $details_url = route("frontend.products.show", [encode_id($row->id), $row->slug]);
                $image_url = Str::startsWith($row->image, 'http') ? $row->image : asset('storage/'.$row->image);
            @endphp
            <div class="recent-item d-flex align-items-start mb-4 pb-3 @if(!$loop->last) border-bottom @endif">
                <div class="recent-thumb me-3" style="flex-shrink: 0;">
                    <a href="{{ $details_url }}" class="d-block overflow-hidden rounded-3">
                        <img src="{{ $image_url }}" alt="{{ $row->name }}" style="width: 70px; height: 70px; object-fit: cover; transition: transform 0.3s ease-in-out;">
                    </a>
                </div>
                <div class="recent-content">
                    <h4 class="mb-1" style="font-size: 15px; line-height: 1.4;">
                        <a href="{{ $details_url }}" class="text-dark text-decoration-none hover-primary fw-semibold">{{ $row->name }}</a>
                    </h4>
                    <div class="text-muted d-flex align-items-center" style="font-size: 12px;">
                        <i class="fa-regular fa-calendar me-1"></i>
                        {{ $row->published_at ? $row->published_at->format('M d, Y') : $row->created_at->format('M d, Y') }}
                    </div>
                    @if($row->price)
                        <div class="text-primary fw-bold mt-1" style="font-size: 14px;">
                            ${{ number_format($row->price, 2) }}
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <style>
        .hover-primary:hover {
            color: var(--accent-color) !important;
        }
        .recent-thumb img:hover {
            transform: scale(1.1);
        }
    </style>
</div>
