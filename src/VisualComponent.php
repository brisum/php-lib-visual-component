<?php

namespace Brisum\Lib\VisualComponent;

use Brisum\Lib\View;

class VisualComponent
{
	/**
	 * @var DataProviderInterface
	 */
	protected  $dataProvider;

	/**
	 * @var View
	 */
	protected $view;

	/**
	 * @var string
	 */
	protected $template;

    /**
     * Component constructor.
     * @param DataProviderInterface $dataProvider
     * @param View $view
     * @param string $template
     */
	public function __construct(
		DataProviderInterface $dataProvider,
		View $view,
		$template
	) {
		$this->dataProvider = $dataProvider;
		$this->view = $view;
		$this->template = $template;
	}

	/**
	 * @return string
	 */
	public function content()
	{
		return $this->view->content(
			$this->template,
			$this->dataProvider->getData()
		);
	}

	/**
	 * @return void
	 */
	public function render()
	{
		$this->view->render(
			$this->template,
			$this->dataProvider->getData()
		);
	}
}
