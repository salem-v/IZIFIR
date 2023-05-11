import './style/style.scss'

export class BannerProgram
{
	constructor(options = {name: 'Bannerprogram'})
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