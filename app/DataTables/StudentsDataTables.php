<?php

namespace App\DataTables;

use App\models\Student;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class StudentsDataTables extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'dashboard.student.actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\StudentsDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Student $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('Students-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
            ->buttons(
                        Button::make('create'),
                        Button::make(['excel']),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
            return [
                'id' =>  new Column(['id' , 'data' => 'id']),
                'name' =>  new Column(['name', 'data' => 'name']),
                'bdate' =>  new Column(['bdate', 'data' => 'bdate', 'searchable' => true]),
                'phone' => new Column(['phone', 'data' => 'phone']),
                'address' => new Column(['address', 'data' => 'address','addClass'=> 'text-center']),
                'class'  => new Column(['class','data'=> 'class_id']),
                'action' => new Column(['action', 'data' => 'action','addClass'=> 'text-center','printable'=>false,
                    'exportable' => false])
            ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'StudentsDataTables_' . date('YmdHis');
    }
}
