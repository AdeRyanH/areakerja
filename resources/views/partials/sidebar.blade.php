<div class="col-lg-4 sidebar gg" style="margin-top: 0%">


    <div data-aos="zoom-in-up" style="height: 5%">
        <ul class="cat-list-center" style="margin-bottom: 15%">
            <li>
                <a class="justify-content-between" data-toggle="modal" data-target="#modalPushRiwayat" href="#">
                    <p style="font-weight: bold">Riwayat</p>
                </a>
            </li>
            <li>
                <a role="button" data-toggle="modal" data-target="#modalPush" class="justify-content-between" href="#">
                    <p style="font-weight: bold">Tersimpan</p>
                </a>
            </li>
        </ul>
    </div>

    <div data-aos="zoom-in-up" class="single-slidebar" style="margin-top: -15%">
        <h4>Jobs by Location</h4>
        <ul class="cat-list">
            @foreach ($sidebarLocations as $location)
            <li>
                <a class="justify-content-between d-flex" href="{{ route('locations.show', $location->name) }}">
                    <p>{{ $location->name }}</p><span>{{ $location->jobs_count }}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>

    <div data-aos="zoom-in-up" class="single-slidebar" id="top-rate-side" style="display: none">
        <h4>Top rated job posts</h4>
        <ul class="cat-list">
            @foreach ($sidebarJobs as $job)
            <li>
                <a class="justify-content-between single-rated d-table-cell" href="{{ route('jobs.show', $job->id) }}">
                    <br />
                    <h4>{{ $job->title }}</h4>
                    @if ($job->company)
                    {{ $job->company->name }}
                    @endif
                </a>
            </li>
            @endforeach
        </ul>
    </div>

    <div data-aos="zoom-in-up" class="single-slidebar">
        <h4>Jobs by Category</h4>
        <ul class="cat-list">
            @foreach ($sidebarCategories as $category)
            <li>
                <a class="justify-content-between d-flex" href="{{ route('categories.show', $category->slug) }}">
                    <p>{{ $category->name }}</p><span>{{ $category->jobs_count }}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
