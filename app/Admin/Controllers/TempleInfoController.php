<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\TempleInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class TempleInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new TempleInfo(), function (Grid $grid) {
            $grid->export();
            $grid->disableFilterButton();
            $grid->showColumnSelector();
            // 显示快捷编辑按钮
            $grid->showQuickEditButton();

            $grid->column('id')->sortable();
            $grid->column('templeName');
            $grid->column('temple_cover_photo');
            $grid->column('adddress');
            $grid->column('city');
            $grid->column('district')->hide();
            $grid->column('trownship', __('區/鄉鎮'));
            $grid->column('phone');
            $grid->column('contact_person');
            $grid->column('introduce');
            $grid->column('temple_other_photo')->hide();
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
        return Show::make($id, new TempleInfo(), function (Show $show) {
            $show->field('id');
            $show->field('templeName');
            $show->field('temple_cover_photo');
            $show->field('adddress');
            $show->field('city');
            $show->field('district');
            $show->field('trownship');
            $show->field('phone');
            $show->field('contact_person');
            $show->field('introduce');
            $show->field('temple_other_photo');
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
        return Form::make(new TempleInfo(), function (Form $form) {
            $form->display('id');
            $form->text('templeName')->required();
            $form->image('temple_cover_photo')->move('images/temple/'.date('Ym').'/frontCover')->uniqueName()->rules('mimes:jpg,jpeg,png,gif|nullable');
            $form->text('adddress')->required();
            $form->select('city')->options('/api/getCity')->load('trownship', '/api/getDistrict')->required();
            // $form->select('district');
            $form->select('trownship', __('區/鄉鎮'))->required();
            $form->mobile('phone')->options(['mask' => '9999999999'])->required();
            $form->text('contact_person')->required();
            $form->editor('introduce')->options(['menubar' => false, 'toolbar' => ['code undo redo restoredraft | cut copy paste pastetext | forecolor backcolor bold italic underline strikethrough link anchor | alignleft aligncenter alignright alignjustify outdent indent | \
            styleselect formatselect fontselect fontsizeselect | bullist numlist | blockquote subscript superscript removeformat | \
            table image media charmap emoticons hr pagebreak insertdatetime print preview | fullscreen | bdmap indent2em lineheight formatpainter axupimgs']])->imageDirectory('editor/images')->required();
            $form->multipleImage('temple_other_photo')->move('images/temple/'.date('Ym'))->maxSize(3072)->uniqueName()->rules('mimes:jpg,jpeg,png,gif|nullable')->sortable();
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
