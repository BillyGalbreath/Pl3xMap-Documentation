;(function()
{
	typeof(require) != 'undefined' ? SyntaxHighlighter = require('shCore').SyntaxHighlighter : null;
	function Brush()
	{
		var keywords =	'val sealed case def true trait implicit forSome import match object null finally super ' +
						'override try lazy for var catch throw type extends class while with new final yield abstract ' +
						'else do if return protected private this package false';
		var keyops =	'[_:=><%#@]+';
		this.regexList = [
			{ regex: SyntaxHighlighter.regexLib.singleLineCComments,			css: 'comments' },
			{ regex: SyntaxHighlighter.regexLib.multiLineCComments,				css: 'comments' },
			{ regex: SyntaxHighlighter.regexLib.multiLineSingleQuotedString,	css: 'string' },
			{ regex: SyntaxHighlighter.regexLib.multiLineDoubleQuotedString,    css: 'string' },
			{ regex: SyntaxHighlighter.regexLib.singleQuotedString,				css: 'string' },
			{ regex: /0x[a-f0-9]+|\d+(\.\d+)?/gi,								css: 'value' },
			{ regex: new RegExp(this.getKeywords(keywords), 'gm'),				css: 'keyword' },
			{ regex: new RegExp(keyops, 'gm'),									css: 'keyword' }
			];
	}
	Brush.prototype	= new SyntaxHighlighter.Highlighter();
	Brush.aliases	= ['scala'];
	SyntaxHighlighter.brushes.Scala = Brush;
	typeof(exports) != 'undefined' ? exports.Brush = Brush : null;
})();
