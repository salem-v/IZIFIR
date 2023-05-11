import './style/style.scss';

export class AdaptationCase
{
	constructor(options = {name: 'AdaptationCase'})
	{
		this.name = options.name;
	}

	setName(name)
	{
		if (Type.isString(name))
		{
			this.name = name;
		}
	}

	getName()
	{
		return this.name;
	}
}