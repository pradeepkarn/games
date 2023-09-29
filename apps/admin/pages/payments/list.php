<?php
$pl = $context->payment_list;
$tp = $context->total_page;
$cp = $context->current_page;
$active = $context->is_active;
// myprint($pl)
?>
<style>
    .featured-post,
    .trending-post {
        font-size: 30px;
    }
</style>
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col my-3">
                            <h5 class="card-title">All payments</h5>


                        </div>
                        <div class="col my-3">
                            <form action="">
                                <div class="row">
                                    <div class="col-8">
                                        <input value="<?php echo isset($_GET['search']) ? $_GET['search'] : null; ?>" type="search" class="form-control" name="search" placeholder="Search...">
                                    </div>
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary ">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col text-end my-3">
                            <a class="btn btn-dark" href="/<?php echo home . route('paymentCreate'); ?>">Add New</a>
                        </div>
                    </div>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <!-- <thead>
                            <tr>
                                <th scope="col">Game Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Game Link</th>

                                <th scope="col">Status</th>
                                <th scope="col">Order Date</th>
                               

                            </tr>
                        </thead> -->
                        <tbody>
                            <?php 
                            $db = new Dbobjects;
                           
                            foreach ($pl as $key => $pv) :
                                $pv = obj($pv);
                                $trn = strtoupper($pv->unique_id);
                                $amt = $pv->amount;
                                echo "<tr>
                                <th>ORDER ID: {$pv->id}</th>
                                <th>TR No.: $trn</th>
                                <th>Amount: &#x24;{$amt}/-</th>
                                <th>Status: {$pv->status}</th>
                                </tr>";
                                $sql = "SELECT customer_order.*, content.id as game_id, content.title as game_name,
                                content.link as game_link, content.banner, content.is_sold
                                FROM customer_order
                                JOIN content ON customer_order.item_id = content.id
                                WHERE customer_order.payment_id = '$pv->id';
                                ";
                                $items = $db->show($sql);
                                // myprint($items);
                                foreach ($items as $key => $ord) :
                                    $ord = obj($ord);
                            ?>

                                <tr>
                                    
                                    <td>Game: <?php echo $ord->game_name; ?></td>
                                    <td>Email: <?php echo $ord->customer_email; ?></td>
                                    <td>Mobile: <?php echo "{$pv->isd_code}{$pv->mobile}"; ?></td>
                                    <td>Link: <?php echo $ord->link; ?></td>
                                    <td>Date: <?php echo $pv->created_at; ?></td>
                                    <?php
                                    if ($active == true) { ?>
                                        <td>
                                            <!-- <a class="btn-primary btn btn-sm" href="#">Open</a> -->
                                        </td>
                                    <?php    }
                                    ?>

                                </tr>

                            <?php endforeach; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                    <!-- Pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">

                            <?php
                            $tp = $tp;
                            $current_page = $cp; // Assuming first page is the current page
                            if ($active == true) {
                                $link =  route('paymentList');
                            } else {
                                $link =  route('paymentTrashList');
                            }
                            // Show first two pages
                            for ($i = 1; $i <= $tp; $i++) {
                            ?>
                                <li class="page-item"><a class="page-link" href="/<?php echo home . $link . "?page=$i"; ?>"><?php echo $i; ?></a></li>
                            <?php
                            } ?>




                        </ul>
                    </nav>

                    <!-- Pagination -->
                </div>

            </div>

        </div>
    </div>
</section>
<script>
    window.onload = () => {
        const trendingPost = document.querySelectorAll(".trending-post");
        const featuredPost = document.querySelectorAll(".featured-post");
        for (const tp of trendingPost) {
            tp.addEventListener('click', () => {
                const content_id = tp.getAttribute('data-trending');
                sendData({
                        content_id: content_id,
                        action: 'is_trending'
                    },
                    `/<?php echo home . route('paymentToggleMarked') ?>`,
                    (err, response) => {
                        if (err) {
                            // console.error('Error:', err);
                        } else {

                            res = JSON.parse(response)
                            // console.log('Response:', res);
                            if (res.msg == "success") {
                                // console.log('Response:', response);
                                alert(res.data)
                                location.reload();
                            } else {
                                alert(res.msg);
                            }
                            // do something with the response data
                        }
                    });
            });

        }
        for (const fp of featuredPost) {
            fp.addEventListener('click', () => {
                const content_id = fp.getAttribute('data-featured');
                sendData({
                        content_id: content_id,
                        action: 'is_featured'
                    },
                    `/<?php echo home . route('paymentToggleMarked') ?>`,
                    (err, response) => {
                        if (err) {
                            // console.error('Error:', err);
                        } else {

                            res = JSON.parse(response)
                            // console.log('Response:', res);
                            if (res.msg == "success") {
                                // console.log('Response:', response);
                                alert(res.data)
                                location.reload();
                            } else {
                                alert(res.data);
                            }
                            // do something with the response data
                        }
                    });
            });

        }
    };

    function sendData(data, url, callback) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', url);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = () => {
            if (xhr.status === 200) {
                // console.log('Data successfully sent.');
                callback(null, xhr.responseText);
            } else {
                console.log('Request failed. Status:', xhr.status);
                callback(xhr.status);
            }
        };
        xhr.send(JSON.stringify(data));
    }
</script>