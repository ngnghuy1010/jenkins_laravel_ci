<?php
class Baz1
{
	/**
	 * @param \DateTime $datetime Description
	 */
	public function foo($datetime)
	{
		$datetime->add();
	}
}
        
class Baz3
{
    /**
     * @param \DateTime[] $datetimes Description
     */
    public function foo($datetimes)
    {
        foreach ($datetimes as $datetime) {
            $datetime->add(1);
        }
    }
}

/** @var \DateTime $datetime */
$datetime->add(1);

/**
 * @method \DateTime datetime() Description
 */
class Baz5
{
    private $container;

    public function __get($name)
    {
        return $this->container[$name];
    }
 }

$baz5 = new Baz5();
$datetime = $baz5->datetime();


/**
 * @property integer $id
 * @property string $title
 * @property string $body
 */
class Baz6
{
}

$baz6 = new Baz6();
$baz6->title;