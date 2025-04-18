<section id="charts" class="mx-auto pt-5 pb-5">
    <div class="container-xl">
        <div class="row">
            <!-- Activity Chart -->
            <div class="col-md-8">
                <div class="activity-chart box-wr">
                    <h5 class="mb-4">Recipe Activity</h5>
                    <div class="details">
                        <div class="item">
                            <h2>3.45</h2>
                            <small>Current GPA</small>
                        </div>
                        <div class="separator"></div>
                        <div class="item">
                            <h2>4.78</h2>
                            <small>Class Average GPA</small>
                        </div>
                    </div>
                    <div class="chart-container">
                        <div style="max-height: 310px;">
                            <canvas id="activityChart" style="display: block; box-sizing: border-box;" width="794"
                                height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Engagement Chart -->
            <div class="col-md-4">
                <div class="engagement-chart box-wr">
                    <h5 class="mb-4">Recipe Categories</h5>
                    <div class="details">
                        <div class="item">
                            <small><i class="bi bi-circle-fill" style="color: #0d6efd;"></i> Main
                                Dish</small>
                            <h2>40</h2>
                        </div>
                        <div class="item">
                            <small><i class="bi bi-circle-fill" style="color: #198754;"></i> Deserts</small>
                            <h2>25</h2>
                        </div>
                        <div class="item">
                            <small><i class="bi bi-circle-fill" style="color: #ffc107;"></i>
                                Appetizers</small>
                            <h2>20</h2>
                        </div>
                        <div class="item">
                            <small><i class="bi bi-circle-fill" style="color: #dc3545;"></i>
                                Beverages</small>
                            <h2>15</h2>
                        </div>
                    </div>
                    <div class="chart-container">
                        <div style="height: 300px;">
                            <canvas id="categoryChart"
                                style="display: block; box-sizing: border-box; height: 300px; width: 100%;" width="400"
                                height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>