<div class="page-header">
    <h1 class="page-title">All <?= $this->input->get('type') ?></h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">All <?= $this->input->get('type') ?></li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title"></h3>
                <a class="btn btn-primary btn-sm" href="/console-admin/post/?type=<?= $this->input->get('type') ?>&action=add">Add <?= $this->input->get('type') ?></a>
            </div>
            <div class="card-body">
                <div class="panel panel-primary">
                    <div class="table-responsive">
                        <table id="file-datatable2" class="table table-bordered text-wrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">Name</th>
                                    <th class="border-bottom-0">Slug</th>
                                    <th class="border-bottom-0">Description</th>
                                    <th class="border-bottom-0">Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $this->db->select('*');
                                $this->db->from('posts');
                                $this->db->where('post_type', $this->input->get('type'));
                                $post = $this->db->get();
                                foreach ($post->result() as $value) {
                                    echo "<tr>
                                        <td><input type='checkbox' value='$value->ID' class='blukDelete'></td>
                                        <td><a href='/console-admin/post/?type=$value->post_type&action=update&id=$value->ID'>$value->post_title</a></td>
                                        <td>$value->post_slug</td>
                                        <td>" . substr(strip_tags($value->post_content), 0, 35) . "</td>
                                        <td>$value->post_type</td>
                                    </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/eg-assets/script/post.js"></script>