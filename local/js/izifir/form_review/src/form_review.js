import './style/style.scss'
import 'main.core'

export class FormReview
{
	constructor(options = {name: 'FormReview'})
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