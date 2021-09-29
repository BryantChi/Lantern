<div class="overflow-auto">
    {{ $templeInfo->onEachSide(1)->links() }}
</div>

@foreach ($templeInfo as $item)
<div class="col-lg-4 col-md-6 col-sm-6">
    <!-- Single -->
    <div class="properties pb-30">
        <div class="properties-card">
            <div class="properties-img">
                <a href="#"><img src="{{ asset(($item->temple_cover_photo == '')?'https://luckylight.hinet.net/TempleLights/resources/zh/images/bg.jpg':'uploads/'.$item->temple_cover_photo) }}" alt=""></a>
                {{-- images/default_temple.png --}}
            </div>
            <div class="wrap-wrapper">
                <div class="properties-caption">
                    <h3><a href="#">{{ $item->templeName }}</a></h3>
                    <p>{{ $item->adddress }}</p>
                </div>
                <div class="properties-footer d-flex justify-content-between align-items-center">
                    <div class="class-day">
                        <a href="{{ $item->facebook }}" target="_blank">
                            <img width="40" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTUxMiAyNTZjMCAxNDEuMzg2NzE5LTExNC42MTMyODEgMjU2LTI1NiAyNTZzLTI1Ni0xMTQuNjEzMjgxLTI1Ni0yNTYgMTE0LjYxMzI4MS0yNTYgMjU2LTI1NiAyNTYgMTE0LjYxMzI4MSAyNTYgMjU2em0wIDAiIGZpbGw9IiM0YTdhZmYiIGRhdGEtb3JpZ2luYWw9IiM0YTdhZmYiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0yNjcuMjM0Mzc1IDUxMS43MzgyODFjMTM2LjE3MTg3NS01Ljg3ODkwNiAyNDQuNzY1NjI1LTExOC4xMjEwOTMgMjQ0Ljc2NTYyNS0yNTUuNzM4MjgxIDAtLjk5NjA5NC0uMDI3MzQ0LTEuOTg4MjgxLS4wMzkwNjItMi45ODQzNzVsLTE3Ny42OTkyMTktMTc3LjcwMzEyNS0xOTAgMTk4LjU5Mzc1IDEwNS41NjY0MDYgMTA1LjU2NjQwNi00OC42NzU3ODEgNjYuMTgzNTk0em0wIDAiIGZpbGw9IiMwMDUzYmYiIGRhdGEtb3JpZ2luYWw9IiMwMDUzYmYiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0zMzQuMjYxNzE5IDc1LjMxMjV2NTcuOTY4NzVzLTY2LjU1NDY4OC05LjY2MDE1Ni02Ni41NTQ2ODggMzMuMjc3MzQ0djQyLjkzNzVoNjAuMTEzMjgxbC03LjUxMTcxOCA2NS40ODA0NjhoLTUyLjYwMTU2M3YxNzAuNjc5Njg4aC02Ni41NTQ2ODd2LTE3MC42Nzk2ODhsLTU2Ljg5NDUzMi0xLjA3NDIxOHYtNjQuNDA2MjVoNTUuODIwMzEzdi00OS4zNzg5MDZzLTMuNjgzNTk0LTczLjQ1NzAzMiA2OC43MDMxMjUtODYuOTQ5MjE5YzMwLjA1ODU5NC01LjYwNTQ2OSA2NS40ODA0NjkgMi4xNDQ1MzEgNjUuNDgwNDY5IDIuMTQ0NTMxem0wIDAiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiNmZmZmZmYiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0zMzQuMjYxNzE5IDEzMy4yODEyNXYtNTcuOTY4NzVzLTM1LjQyMTg3NS03Ljc1LTY1LjQ4MDQ2OS0yLjE0NDUzMWMtNC42OTUzMTIuODc1LTkuMDYyNSAyLjAwNzgxMi0xMy4xMzY3MTkgMy4zNDc2NTZ2MzY5LjE0MDYyNWgxMi4wNjI1di0xNzAuNjc5Njg4aDUyLjU5NzY1N2w3LjUxNTYyNC02NS40ODA0NjhoLTYwLjExMzI4MXMwIDAgMC00Mi45Mzc1IDY2LjU1NDY4OC0zMy4yNzczNDQgNjYuNTU0Njg4LTMzLjI3NzM0NHptMCAwIiBmaWxsPSIjZGNlMWViIiBkYXRhLW9yaWdpbmFsPSIjZGNlMWViIiBzdHlsZT0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" />
                        </a>
                    </div>
                    <div class="class-day">
                        <a href="tel:{{ $item->phone }}">
                            <img width="40" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8Y2lyY2xlIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgc3R5bGU9IiIgY3g9IjI1NiIgY3k9IjI1NiIgcj0iMjU2IiBmaWxsPSIjMDBiZjE1IiBkYXRhLW9yaWdpbmFsPSIjMjE5NmYzIiBjbGFzcz0iIj48L2NpcmNsZT4KPHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBzdHlsZT0iIiBkPSJNMzg0LDMwOC45MjhjLTI3LjYxNiwwLTUzLjk1Mi02LjAxNi03OC4yNC0xNy44ODhjLTMuODA4LTEuODI0LTguMjI0LTIuMTEyLTEyLjI1Ni0wLjczNiAgYy00LjAzMiwxLjQwOC03LjMyOCw0LjM1Mi05LjE4NCw4LjE2bC0xMS41MiwyMy44NGMtMzQuNTYtMTkuODQtNjMuMjMyLTQ4LjU0NC04My4xMDQtODMuMTA0bDIzLjg3Mi0xMS41MiAgYzMuODQtMS44NTYsNi43NTItNS4xNTIsOC4xNi05LjE4NGMxLjM3Ni00LjAzMiwxLjEyLTguNDQ4LTAuNzM2LTEyLjI1NmMtMTEuOTA0LTI0LjI1Ni0xNy45Mi01MC41OTItMTcuOTItNzguMjQgIGMwLTguODMyLTcuMTY4LTE2LTE2LTE2SDEyOGMtOC44MzIsMC0xNiw3LjE2OC0xNiwxNmMwLDE0OS45ODQsMTIyLjAxNiwyNzIsMjcyLDI3MmM4LjgzMiwwLDE2LTcuMTY4LDE2LTE2di01OS4wNzIgIEM0MDAsMzE2LjA5NiwzOTIuODMyLDMwOC45MjgsMzg0LDMwOC45Mjh6IiBmaWxsPSIjZmFmYWZhIiBkYXRhLW9yaWdpbmFsPSIjZmFmYWZhIj48L3BhdGg+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
                        </a>
                    </div>
                    <div class="class-day">
                        <a href="#" class="btn">更多介紹</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<div class="overflow-auto">
    {{ $templeInfo->onEachSide(1)->links() }}
</div>
