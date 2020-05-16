<?php

namespace App\DataTables;

use App\Model\Automobile;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class AutomobileDataTable extends DataTable
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
            ->addColumn('action', function($row){
                return view('automobiles._action', ['data'=> $row]);
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Automobile $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Automobile $model)
    {
        return $model->newQuery()->with('category')->with('company');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('automobile-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('frtip')
                    ->orderBy(1);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->title('ID'),
            Column::make('name')->title('Nome'),
            Column::make('model')->title('Modelo'),
            Column::make('color')->title('Cor'),
            Column::make('category.name')->title('Categoria'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(105)
                  ->addClass('text-center')
                  ->title('Ação'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Automobile_' . date('YmdHis');
    }
}
