<style>
    .row {
        margin-top: 10px;
    }
</style>

<div class="container" id="jar">
    <div class="row mx-auto content">
        <div class="col">
            @foreach($reviews as $rs)
                <div class="review-item">
                    <div class="rating">
                        @for ($i = 0; $i < 5; $i++)
                            @if ($i < $rs->rate)
                                <i class='bx bxs-star'></i>
                            @else
                                <span class="star"></span>
                            @endif
                        @endfor

                    </div>
                    <h3>{{$rs->subject}}</h3>
                    <span>
    {{--                                                                    @if($rs->user->profile_photo_url)--}}
                        {{--                                                                     <img src="{{Storage::url($rs->user->profile_photo_url)}}" style="width: 30px; height: 30px; border-radius: 100%;" class="shadow" alt="image">--}}
                        {{--                                                                    @endif--}}
                                                                        <strong>{{$rs->user->name}}</strong> on <strong>{{$rs->created_at}}</strong>
                                                                    </span>
                    <p>{{$rs->review}}.</p>
                </div>
            @endforeach
        </div>

    </div>
</div>
<nav>
    <ul class="pagination justify-content-center pagination-sm">
    </ul>
</nav>

<script>
    // Returns an array of maxLength (or less) page numbers
    // where a 0 in the returned array denotes a gap in the series.
    // Parameters:
    //   totalPages:     total number of pages
    //   page:           current page
    //   maxLength:      maximum size of returned array
    function getPageList(totalPages, page, maxLength) {
        if (maxLength < 5) throw "maxLength must be at least 5";

        function range(start, end) {
            return Array.from(Array(end - start + 1), (_, i) => i + start);
        }

        var sideWidth = maxLength < 9 ? 1 : 2;
        var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
        var rightWidth = (maxLength - sideWidth * 2 - 2) >> 1;
        if (totalPages <= maxLength) {
            // no breaks in list
            return range(1, totalPages);
        }
        if (page <= maxLength - sideWidth - 1 - rightWidth) {
            // no break on left of page
            return range(1, maxLength - sideWidth - 1)
                .concat([0])
                .concat(range(totalPages - sideWidth + 1, totalPages));
        }
        if (page >= totalPages - sideWidth - 1 - rightWidth) {
            // no break on right of page
            return range(1, sideWidth)
                .concat([0])
                .concat(
                    range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages)
                );
        }
        // Breaks on both sides
        return range(1, sideWidth)
            .concat([0])
            .concat(range(page - leftWidth, page + rightWidth))
            .concat([0])
            .concat(range(totalPages - sideWidth + 1, totalPages));
    }

    $(function() {
        // Number of items and limits the number of items per page
        var numberOfItems = $("#jar .content").length;
        var limitPerPage = 2;
        // Total pages rounded upwards
        var totalPages = Math.ceil(numberOfItems / limitPerPage);
        // Number of buttons at the top, not counting prev/next,
        // but including the dotted buttons.
        // Must be at least 5:
        var paginationSize = 7;
        var currentPage;

        function showPage(whichPage) {
            if (whichPage < 1 || whichPage > totalPages) return false;
            currentPage = whichPage;
            $("#jar .content")
                .hide()
                .slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage)
                .show();
            // Replace the navigation items (not prev/next):
            $(".pagination li").slice(1, -1).remove();
            getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                $("<li>")
                    .addClass(
                        "page-item " +
                        (item ? "current-page " : "") +
                        (item === currentPage ? "active " : "")
                    )
                    .append(
                        $("<a>")
                            .addClass("page-link")
                            .attr({
                                href: "javascript:void(0)"
                            })
                            .text(item || "...")
                    )
                    .insertBefore("#next-page");
            });
            return true;
        }

        // Include the prev/next buttons:
        $(".pagination").append(
            $("<li>").addClass("page-item").attr({ id: "previous-page" }).append(
                $("<a>")
                    .addClass("page-link")
                    .attr({
                        href: "javascript:void(0)"
                    })
                    .text("Prev")
            ),
            $("<li>").addClass("page-item").attr({ id: "next-page" }).append(
                $("<a>")
                    .addClass("page-link")
                    .attr({
                        href: "javascript:void(0)"
                    })
                    .text("Next")
            )
        );
        // Show the page links
        $("#jar").show();
        showPage(1);

        // Use event delegation, as these items are recreated later
        $(
            document
        ).on("click", ".pagination li.current-page:not(.active)", function() {
            return showPage(+$(this).text());
        });
        $("#next-page").on("click", function() {
            return showPage(currentPage + 1);
        });

        $("#previous-page").on("click", function() {
            return showPage(currentPage - 1);
        });
        $(".pagination").on("click", function() {
            $("html,body").animate({ scrollTop: 0 }, 0);
        });
    });

</script>
