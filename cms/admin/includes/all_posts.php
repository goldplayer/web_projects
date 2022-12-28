<table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Status</th>
                                <th scope="col">Images</th>
                                <th scope="col">Tags</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Author</th>
                                <th scope="col">Create Date</th>
                              </tr>
                            </thead>
                            <tbody>


                                <?php

                                    $qry = "SELECT * FROM posts  LEFT JOIN category  ON posts.category_id = category.name_category ";
                                    $select_post = mysqli_query($connect, $qry);
                                    
                                    while($row = mysqli_fetch_assoc($select_post)){
                                         $id_p = $row['id_post'];
                                         $post_title = $row['post_name'];
                                         $post_category = $row['category_id'];
                                         $post_status = $row['post_status'];
                                         $post_images = $row['post_image'];
                                         $post_tags = $row['post_tags'];
                                         $post_comment = $row['post_comment'];
                                         $post_author = $row['creater'];
                                         $post_date = $row['create_date'];

                                    
                                            echo "
                                            <tr>
                                                <th scope='row'>{$id_p}</th>
                                                <td>{$post_title}</d>
                                                <td>{$post_category}</td>
                                                <td>{$post_status}</td>
                                                <td><img src='../images/$post_images' class='post_small_img' alt='not found'></img></td>
                                                <td>{$post_tags}</td>
                                                <td>{$post_comment}</td>
                                                <td>{$post_author}</td>
                                                <td>{$post_date}</td>
                                            </tr>
                                            
                                            
                                            ";
                                    
                                        }
                                
                                ?>
                               
                            </tbody>
                          </table>