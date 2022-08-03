<?php

// print_r($page);
echo view('admin/header')
            . view('admin/'.$page)
            . view('admin/footer');