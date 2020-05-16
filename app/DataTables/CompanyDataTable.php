<?php

namespace App\DataTables;

use App\Model\Company;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CompanyDataTable extends DataTable
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
                return view('companies._action', ['data'=> $row]);
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Company $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Company $model)
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
                    ->setTableId('company-table')
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
            Column::make('name')->title('Razão Social'),
            Column::make('fantasy')->title('Nome Fantasia'),
            Column::make('cnpj')->title('CNPJ'),
            Column::make('city')->title('Cidade'),
            Column::make('responsible')->title('Responsável'),
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
        return 'Company_' . date('YmdHis');
    }
}
