import './style/style.scss'
import 'main.core'

export class MaininfoCase
{
	constructor(options = {name: 'MaininfoCase'})
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