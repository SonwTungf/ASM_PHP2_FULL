<?php

namespace  Pc\XUONG_OOP\Interfaces;


interface InterfaceControllers{
    public function index();
    public function create();
    public function store();
    public function edit($id);
    public function update($id);
    public function delete($id);
    public function show($id);

}
