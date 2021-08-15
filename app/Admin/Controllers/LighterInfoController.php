<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\LighterInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class LighterInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new LighterInfo(), function (Grid $grid) {
            $grid->export();
            $grid->disableFilterButton();
            $grid->showColumnSelector();
            // 显示快捷编辑按钮
            $grid->showQuickEditButton();

            $grid->column('id')->sortable();
            $grid->column('lighter');
            $grid->column('lighttemple');
            $grid->column('lightdate_start');
            $grid->column('lightdate_end');
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
        return Show::make($id, new LighterInfo(), function (Show $show) {
            $show->field('id');
            $show->field('lighter');
            $show->field('lighttemple');
            $show->field('lightdate_start');
            $show->field('lightdate_end');
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
        return Form::make(new LighterInfo(), function (Form $form) {
            $form->display('id');
            $form->text('lighter');
            $form->text('lighttemple');
            $form->text('lightdate_start');
            $form->text('lightdate_end');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
