<?php include_once __DIR__ . '/../../utils/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= shared('elements/meta'); ?>
    <title>Users Management</title>
    <?= shared('elements/styles'); ?>
    <link rel="stylesheet" href="<?= asset('lib/DataTables/datatables.min.css'); ?>">
    <link rel="stylesheet" href="<?= asset('lib/DataTables/dataTables.semanticui.min.css'); ?>">
    <link rel="stylesheet" href="<?= asset('lib/DataTables/responsive.semanticui.min.css'); ?>">
    <link rel="stylesheet" href="<?= asset('lib/DataTables/responsive.semanticui.min.css'); ?>">
    <style>
        .user-details {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .user-details .image {
            height: 35px !important;
            width: 35px !important;
            border: var(--img-border) !important;
        }

        .ui.feed * {
            background-color: var(--color-white) !important;
            font-size: 0.8rem !important;
        }

        .ui.feed .content *:not(a.user) {
            color: var(--color-dark) !important;
        }
    </style>
</head>

<body>

    <div class="shared-standalone-cont">
        <?= shared('layouts/loader/window'); ?>
        <?= featured('admin/shared/components/user-modal'); ?>
    </div>

    <div class="container-body pusher">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-auto">
                <?= featured('admin/shared/layouts/sidebar'); ?>
            </div>

            <!-- Main Content -->
            <div class="col">
                <main class="container-main">
                    <h1>Users Management</h1>

                    <!-- User Stats -->
                    <div class="section-container">
                        <div class="section-wrapper stat-cards">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="box stat-card">
                                        <div class="info">
                                            <h6 class="text-muted mb-2">
                                                Total Users
                                            </h6>
                                            <h2>5,423</h2>
                                        </div>
                                        <div class="progress-circle">
                                            <svg viewBox="0 0 36 36" class="circular-chart">
                                                <path
                                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                                    fill="none" stroke="#eee" stroke-width="3" />
                                                <path
                                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                                    fill="none" stroke="#20c997" stroke-width="4.3"
                                                    stroke-dasharray="85, 100" />
                                                <text x="18" y="20.35" class="percentage">
                                                    +8.5%
                                                </text>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box stat-card">
                                        <div class="info">
                                            <h6 class="text-muted mb-2">
                                                Active Users
                                            </h6>
                                            <h2>4,721</h2>
                                        </div>
                                        <div class="progress-circle">
                                            <svg viewBox="0 0 36 36" class="circular-chart">
                                                <path
                                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                                    fill="none" stroke="#eee" stroke-width="3" />
                                                <path
                                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                                    fill="none" stroke="#6c9bcf" stroke-width="4.3"
                                                    stroke-dasharray="87, 100" />
                                                <text x="18" y="20.35" class="percentage">
                                                    87%
                                                </text>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box stat-card">
                                        <div class="info">
                                            <h6 class="text-muted mb-2">
                                                New Users (Today)
                                            </h6>
                                            <h2>127</h2>
                                        </div>
                                        <div class="progress-circle">
                                            <svg viewBox="0 0 36 36" class="circular-chart">
                                                <path
                                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                                    fill="none" stroke="#eee" stroke-width="3" />
                                                <path
                                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                                    fill="none" stroke="#ff0060" stroke-width="4.3"
                                                    stroke-dasharray="65, 100" />
                                                <text x="18" y="20.35" class="percentage">
                                                    +6.5%
                                                </text>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- New Users -->
                    <div class="section-container">
                        <h2 class="title">New Users</h2>
                        <div class="section-wrapper box new-users">
                            <div class="d-flex flex-wrap justify-content-around">
                                <div class="user">
                                    <img src="<?= asset('img/profiles/user-1.jpg'); ?>" class="rounded-circle"
                                        alt="User avatar" />
                                    <label class="mt-2 name">John Doe</label>
                                    <small class="text-muted time-ago">2 mins ago</small>
                                </div>
                                <div class="user">
                                    <img src="<?= asset('img/profiles/user-2.jpg'); ?>" class="rounded-circle"
                                        alt="User avatar" />
                                    <label class="mt-2">John Doe</label>
                                    <small class="text-muted">5 mins ago</small>
                                </div>
                                <div class="user">
                                    <img src="<?= asset('img/profiles/user-3.jpg'); ?>" class="rounded-circle"
                                        alt="User avatar" />
                                    <label class="mt-2">John Doe</label>
                                    <small class="text-muted">15 mins ago</small>
                                </div>
                                <div class="user">
                                    <img src="<?= asset('img/profiles/user-4.jpg'); ?>" class="rounded-circle"
                                        alt="User avatar" />
                                    <label class="mt-2">John Doe</label>
                                    <small class="text-muted">42 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User List -->
                    <div class="section-container">
                        <h2 class="title">Users List</h2>
                        <div class="section-wrapper table-list box">
                            <div class="table-filters">
                                <div class="base-filters">
                                    <div class="ui fluid mini category search user-search">
                                        <div class="ui icon input">
                                            <input class="prompt" type="text" placeholder="Search users..." />
                                            <i class="search icon"></i>
                                        </div>
                                        <div class="results"></div>
                                    </div>
                                    <div class="quick-filters">
                                        <div class="ui mini compact selection floating labeled icon dropdown">
                                            <input type="hidden" name="status" />
                                            <i class="signal icon"></i>
                                            <div class="default text">Status</div>
                                            <div class="menu">
                                                <div class="header">
                                                    <i class="tags icon"></i>
                                                    Filter by Status
                                                </div>
                                                <div class="item" data-value="active">
                                                    Active
                                                </div>
                                                <div class="item" data-value="inactive">
                                                    Inactive
                                                </div>
                                                <div class="item" data-value="pending">
                                                    Pending
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ui mini compact selection floating labeled icon dropdown">
                                            <input type="hidden" name="role" />
                                            <i class="user icon"></i>
                                            <div class="default text">Role</div>
                                            <div class="menu">
                                                <div class="header">
                                                    <i class="tags icon"></i>
                                                    Filter by Role
                                                </div>
                                                <div class="item" data-value="admin">
                                                    Admin
                                                </div>
                                                <div class="item" data-value="user">
                                                    User
                                                </div>
                                            </div>
                                        </div>
                                        <button class="ui mini secondary button filter-reset-btn">
                                            <i class="times icon"></i>
                                            Reset
                                        </button>
                                    </div>
                                </div>
                                <button class="ui mini primary button add-user-btn" id="addUserBtn"
                                    data-open-modal="#userModal">
                                    <i class="plus icon"></i>
                                    Add User
                                </button>
                            </div>
                            <div class="table-container">
                                <table class="ui fixed single line small very basic nowrap selectable quick-view table"
                                    id="usersTable">
                                    <thead>
                                        <tr>
                                            <th width="150">User</th>
                                            <th width="220">Email</th>
                                            <th width="80">Role</th>
                                            <th width="80">Gender</th>
                                            <th width="128">Phone</th>
                                            <th width="118">Birth Date</th>
                                            <th width="100">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Users Table Dynamic Data -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

            <!-- Right Section -->
            <div class="col-lg-3">
                <div class="right-section">
                    <!-- Nav -->
                    <div class="rsection-container nav">
                        <div class="dark-mode-toggle">
                            <span class="material-icons-sharp light active">light_mode</span>
                            <span class="material-icons-sharp dark">dark_mode</span>
                        </div>
                        <div class="profile">
                            <div class="info">
                                <span>Hey, <b>Admin</b></span>
                                <small class="text-muted">Admin</small>
                            </div>
                            <div class="profile-photo">
                                <img class="rounded-circle" width="37"
                                    src="<?= asset('img/profiles/profile.jpg'); ?>" />
                            </div>
                        </div>
                    </div>

                    <!-- User Activity Feed -->
                    <div class="rsection-container box">
                        <h2>Recent Activity</h2>
                        <div class="rsection-wrapper">
                            <div class="ui feed mt-4" id="userActivityFeed">
                                <div class="event">
                                    <div class="label">
                                        <img src="<?= asset('img/avatars/elliot.jpg'); ?>" class="ui avatar image" />
                                    </div>
                                    <div class="content">
                                        <div class="summary">
                                            <a class="user"> Elliot Fu </a>
                                            added you as a friend
                                            <div class="date">
                                                1 Hour Ago
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <a class="like">
                                                <i class="like icon"></i> 4
                                                Likes
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="event">
                                    <div class="label">
                                        <img src="<?= asset('img/avatars/helen.jpg'); ?>" class="ui avatar image" />
                                    </div>
                                    <div class="content">
                                        <div class="summary">
                                            <a class="user">Helen Troy</a> added
                                            <a>2 new illustrations</a>
                                            <div class="date">
                                                4 days ago
                                            </div>
                                        </div>
                                        <div class="extra images">
                                            <a><img src="<?= asset('img/placeholders/image.png'); ?>" /></a>
                                            <a><img src="<?= asset('img/placeholders/image.png'); ?>" /></a>
                                        </div>
                                        <div class="meta">
                                            <a class="like">
                                                <i class="like icon"></i> 1
                                                Like
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="event">
                                    <div class="label">
                                        <img src="<?= asset('img/avatars/jenny.jpg'); ?>" class="ui avatar image" />
                                    </div>
                                    <div class="content">
                                        <div class="summary">
                                            <a class="user"> Jenny Hess </a>
                                            added you as a friend
                                            <div class="date">
                                                2 Days Ago
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <a class="like">
                                                <i class="like icon"></i> 8
                                                Likes
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="event">
                                    <div class="label">
                                        <img src="<?= asset('img/avatars/joe.jpg'); ?>" class="ui avatar image" />
                                    </div>
                                    <div class="content">
                                        <div class="summary">
                                            <a class="user">Joe Henderson</a> posted on
                                            his page
                                            <div class="date">
                                                3 days ago
                                            </div>
                                        </div>
                                        <div class="extra text">
                                            Ours is a life of constant
                                            reruns. We're always circling
                                            back to where we'd we started,
                                            then starting all over again.
                                            Even if we don't run extra laps
                                            that day, we surely will come
                                            back for more of the same
                                            another day soon.
                                        </div>
                                        <div class="meta">
                                            <a class="like">
                                                <i class="like icon"></i> 5
                                                Likes
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="event">
                                    <div class="label">
                                        <img src="<?= asset('img/avatars/justen.jpg'); ?>" class="ui avatar image" />
                                    </div>
                                    <div class="content">
                                        <div class="summary">
                                            <a class="user">Justen Kitsune</a> added
                                            <a>2 new photos</a> of you
                                            <div class="date">
                                                4 days ago
                                            </div>
                                        </div>
                                        <div class="extra images">
                                            <a><img src="<?= asset('img/placeholders/image.png'); ?>" /></a>
                                            <a><img src="<?= asset('img/placeholders/image.png'); ?>" /></a>
                                        </div>
                                        <div class="meta">
                                            <a class="like">
                                                <i class="like icon"></i> 41
                                                Likes
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <?= shared('elements/scripts'); ?>
    <script src="<?= asset('lib/DataTables/datatables.min.js'); ?>"></script>
    <script src="<?= asset('lib/DataTables/dataTables.semanticui.min.js'); ?>"></script>
    <script src="<?= asset('lib/DataTables/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= asset('lib/DataTables/responsive.semanticui.min.js'); ?>"></script>
    <script src="<?= util('js/formatters.js', true); ?>"></script>
    <script src="<?= shared('js/tableListFilters.js', true); ?>"></script>
    <script type="text/javascript">
        // Cache DOM elements
        const $userModal = $("#userModal");
        const $userForm = $userModal.find("#userForm");
        const $usersTable = $('#usersTable');
        const $usersDataTable = $usersTable.DataTable({
            dom: 't<"bottom-controls"<"info"i><"right-controls"l<"pagination"p>>>',
            pageLength: 10,
            deferRender: true,
            stateSave: true,
            responsive: true,
            processing: true,
            serverSide: true,
            searching: true,
            orderCellsTop: true,
            autoWidth: false,
            scrollCollapse: true,
            scrollX: true,
            scrollY: '500px',
            language: {
                info: "Showing _START_ to _END_ of _TOTAL_ entries",
                lengthMenu: "Entries per page _MENU_",
                processing: '<div class="ui active inline elastic loader"></div>',
                // infoEmpty: "No entries to show",
                // emptyTable: `
                //     <div class="ui placeholder segment">
                //         <div class="ui icon header">
                //             <i class="search icon"></i>
                //             No Users Found
                //         </div>
                //         <div class="ui primary button">Add New User</div>
                //     </div>
                // `,
            },
            columnDefs: [
                { orderable: false, targets: [6] },
                // { width: '13%', targets: 0 }, // User column
                // { width: '15%', targets: 1 }, // Email column
                // { width: '6%', targets: [2, 3] }, // Role and Gender columns
                // { width: '9%', targets: [4, 5] }, // Phone and Birth Date columns
                // { width: '6%', targets: 6 }  // Actions column
            ],
            columns: [
                { data: 'user' },
                { data: 'email' },
                { data: 'role' },
                { data: 'gender' },
                { data: 'phone' },
                { data: 'birthDate' },
                { data: 'actions' }
            ],
            ajax: {
                url: 'https://dummyjson.com/users/search',
                method: 'GET',
                dataType: 'json',
                data: function (d) {
                    return {
                        q: d.search.value,
                        limit: d.length,
                        skip: d.start || 0
                    };
                },
                dataSrc: function (response) {
                    response.recordsTotal = response.total;
                    response.recordsFiltered = response.total;
                    return userMap(response.users);
                },
                error: ajaxErrorHandler
            },
            drawCallback: function (settings) {
                $(this).find('.ui.dropdown').dropdown();
            },
            initComplete: function (settings, json) {
                // this.api().columns().every(function () {
                //     $(this.header()).css('position', 'static');
                // });

                // Bind search event
                // $('.user-search input').on('keyup', _.debounce(function () {
                //     const searchQuery = $(this).val().trim();
                //     $usersDataTable.search(searchQuery).draw();
                // }, 300));
            }
        });

        function userMap(users) {
            return users.map(user => ({
                user: `<div class="user-details">
                        <img class="ui avatar image" src="${user.image}" alt="${user.username}" />
                        <div class="info d-flex flex-column">
                            <span>${user.firstName} ${user.lastName}</span>
                            <small>ID: ${user.ein}</small>
                        </div>
                    </div>`,
                email: `<span class="email-td">${user.email}</span>`,
                role: `<span class="role-td text-capitalize">${user.role}</span>`,
                gender: `<span class="gender-td text-capitalize">${user.gender}</span>`,
                phone: `<span class="phone-td">${user.phone}</span>`,
                birthDate: `<span class="birth-date-td">${dateToMDY(user.birthDate)}</span>`,
                actions: `<div class="ui compact floating selection dropdown recent-orders-dd">
                            <i class="dropdown icon"></i>
                            <div class="text">Actions</div>
                            <div class="menu">
                                <div class="item" data-value="view">View</div>
                                <div class="item" data-value="edit">Edit</div>
                                <div class="item" data-value="delete">Delete</div>
                            </div>
                        </div>`,
                DT_RowId: `${user.id}`,
                DT_RowClass: 'user-item',
            }));
        }

        function validateUserForm($form = null) {
            let userFormConf = {
                form: $form,
                fields: {
                    name: {
                        identifier: "name",
                        rules: [
                            {
                                type: "empty",
                                prompt: "Please enter a name"
                            },
                            {
                                type: "minLength[2]",
                                prompt: "Name must be at least 2 characters"
                            }
                        ]
                    },
                    email: {
                        identifier: "email",
                        rules: [
                            {
                                type: "empty",
                                prompt: "Please enter an email"
                            },
                            {
                                type: "email",
                                prompt: "Please enter a valid email"
                            }
                        ]
                    },
                    role: {
                        identifier: "role",
                        rules: [
                            {
                                type: "empty",
                                prompt: "Please select a role"
                            }
                        ]
                    }
                },
            };
            validateHandler(userFormConf);
        }

        $(function () {
            tableListBaseFilters($usersDataTable);
            validateUserForm($userForm);
        });
    </script>
</body>

</html>