<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\AdherentInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class AdherentInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AdherentInfo(), function (Grid $grid) {
            $grid->export();
            $grid->disableFilterButton();
            $grid->showColumnSelector();
            // 显示快捷编辑按钮
            $grid->showQuickEditButton();

            $grid->column('id')->sortable();
            $grid->column('adherentName');
            $grid->column('idnumber');
            $grid->column('phone');
            $grid->column('address');
            $grid->column('email');
            $grid->column('line');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new AdherentInfo(), function (Show $show) {
            $show->field('id');
            $show->field('adherentName');
            $show->field('idnumber');
            $show->field('phone');
            $show->field('address');
            $show->field('email');
            $show->field('line');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new AdherentInfo(), function (Form $form) {
            $form->display('id');
            $form->text('adherentName')->required();
            $form->text('idnumber')->rules('required|min:10')->required();
            $form->mobile('phone')->options(['mask' => '9999999999'])->required();
            $form->text('address');
            $form->email('email');
            $form->text('line');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
